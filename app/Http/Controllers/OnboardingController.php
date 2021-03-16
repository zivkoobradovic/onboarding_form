<?php

namespace App\Http\Controllers;

use App\Http\Requests\OnboardingRequest;
use App\Models\Manager;
use App\Models\Onboarding;
use App\Models\ProductCategory;
use App\Mail\SendOnboardingEmail;
use App\Models\IntegrationCategory;
use App\Models\SalesPageType;
use Illuminate\Support\Facades\Mail;
use App\Services\OnboardingService as Service;


class OnboardingController extends Controller
{
    protected $service;
    protected $request;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function signUp(OnboardingRequest $request)
    {

        $onboarding = Onboarding::create($this->service->prepareData($request));
        $onb = Onboarding::find($onboarding->id);
        Mail::to('465cde86fb-1ce71d@inbox.mailtrap.io')->send(new SendOnboardingEmail($onb));
        return redirect('thank-you')->with('message', 'Thank you for your time '  . $onb->contact_info->full_name .  '. Somebody from Digistore24 will contact you shortly.');

    }

    public function thanksShow () {
        return view('forms.thank-you-onboarding');
    }

    public function showForm () {
        $managers = Manager::all();
        $productCategories = ProductCategory::all();
        $integrationCategories = IntegrationCategory::all();
        $salesPageTypes = SalesPageType::all();
        return view('forms.onboarding', [
            'managers' => $managers,
            'productCategories' => $productCategories,
            'integrationCategories' => $integrationCategories,
            'salesPageTypes' => $salesPageTypes,
            ]);
    }


    public function showManagerOnboardings($id) {
        $manager = Manager::find($id);
        $onboardings = $manager->onboardings;
        return view('show-manager-onboardings', [
            'manager' => $manager,
            'onboardings' => $onboardings
        ]);
    }

}
