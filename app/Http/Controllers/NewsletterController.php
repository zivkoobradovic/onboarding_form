<?php

namespace App\Http\Controllers;

use App\Services\NewsletterService as Service;
use App\Requests\NewsletterSignupFormRequest;

class NewsletterController extends Controller
{
    /**
     * @var Service
     */
    private $service;

    public function __construct(Service $service)
    {
        $this->service = $service;
    }

    public function signup(NewsletterSignupFormRequest $request)
    {
        $data = $request->all();

        $this->service->subscribe($data);
        return view('forms/thank-you-newsletter');
    }
}
