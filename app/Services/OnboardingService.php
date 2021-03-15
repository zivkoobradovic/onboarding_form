<?php


namespace App\Services;

use App\Models\Manager;
use App\Requests\OnboardingSignupFormRequest;

class OnboardingService
{
    protected $data = [];
    protected $oto = [];
    protected $request;


    public function __construct (OnboardingSignupFormRequest $request) {
        $this->request = $request;
    }


    public function setAllUpsDowns () {
        $this->oto['upsellDownsell'] = [
            'type' => $this->request['upsellDownsell'],
            'funnelUrl' => $this->request['funnelUrl'],
            'funnelPrice' => $this->request['funnelPrice'][0],
            'funnelCommission' =>  $this->request['funnelCommission'][0],
            'upsellThankYou' => $this->request['upsellThankYou']
        ];

        for ($i = 2; !empty($this->request['upsellDownsell' . $i]) ; $i++) {
            $this->oto['upsellDownsell' . $i] = [
                'type' => $this->request['upsellDownsell'. $i],
                'funnelUrl' => $this->request['funnelUrl'. $i],
                'funnelPrice' => $this->request['funnelPrice'][$i - 1],
                'funnelCommission' =>  $this->request['funnelCommission'][$i - 1],
                'upsellThankYou' => $this->request['upsellThankYou'. $i]
            ];
        }
        return $this->oto;
    }

    public function prepareData() {
       return $this->data = [
            'manager_id' => $this->request->contact_person,
            'manager_name' => Manager::find( $this->request->contact_person)->name,
            'manager_email' => Manager::find( $this->request->contact_person)->email,
            'contact_info' => $this->request->contact_info,
            'platform' => $this->request->platform,
            'product' => $this->request->product,
            'techSupport' => [
                'status' => $this->request->techSupport['status'] === '1' ? true : false,
                'website_access_url' => $this->request->techSupport['website_access_url'],
                'website_access_username' => $this->request->techSupport['website_access_username'],
                'website_access_password' => $this->request->techSupport['website_access_password']
            ],
            'oto' => $this->setAllUpsDowns(),
            'integrationType' => $this->request->integrationType,
            'customIntegration' => $this->request->customIntegration,
            'fulfillment' => $this->request->fulfillment,
            'credentials' => $this->request->credentials,
            'comments' => $this->request->comments,
        ];

    }
}
