<?php


namespace App\Services;

use App\Models\Manager;


class OnboardingService
{
    protected $data = [];
    protected $oto = [];
    protected $request;





    public function setAllUpsDowns ($request) {
        $this->oto['upsellDownsell'] = [
            'type' => $request['upsellDownsell'],
            'funnelUrl' => $request['funnelUrl'],
            'funnelPrice' => $request['funnelPrice'][0],
            'funnelCommission' =>  $request['funnelCommission'][0],
            'upsellThankYou' => $request['upsellThankYou']
        ];

        for ($i = 2; !empty($request['upsellDownsell' . $i]) ; $i++) {
            $this->oto['upsellDownsell' . $i] = [
                'type' => $request['upsellDownsell'. $i],
                'funnelUrl' => $request['funnelUrl'. $i],
                'funnelPrice' => $request['funnelPrice'][$i - 1],
                'funnelCommission' =>  $request['funnelCommission'][$i - 1],
                'upsellThankYou' => $request['upsellThankYou'. $i]
            ];
        }
        return $this->oto;
    }

    public function prepareData($request) {
       return $this->data = [
            'manager_id' => $request->contact_person,
            'manager_name' => Manager::find( $request->contact_person)->name,
            'manager_email' => Manager::find( $request->contact_person)->email,
            'contact_info' => $request->contact_info,
            'platform' => $request->platform,
            'product' => $request->product,
            'techSupport' => [
                'status' => $request->techSupport['status'] === '1' ? true : false,
                'website_access_url' => $request->techSupport['website_access_url'],
                'website_access_username' => $request->techSupport['website_access_username'],
                'website_access_password' => $request->techSupport['website_access_password']
            ],
            'oto' => $this->setAllUpsDowns($request),
            'integrationType' => $request->integrationType,
            'customIntegration' => $request->customIntegration,
            'fulfillment' => $request->fulfillment,
            'credentials' => $request->credentials,
            'comments' => $request->comments,
        ];

    }
}
