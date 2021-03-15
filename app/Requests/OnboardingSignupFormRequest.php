<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardingSignupFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            /* 'contact_person' => 'int',
            'contact_info.full_name' => 'required',
            'contact_info.skype_zoom' => 'required',
            'contact_info.email' => 'required',
            'platform.name' => 'required',
            'platform.password' => 'required',
            'product.product_name' => 'required',
            'product.product_type' => 'required',
            'product.technical_support' => 'boolean',
            'product.website_access_url' => 'required_if:product.technical_support,false',
            'product.website_access_username' => 'required_if:product.technical_support,false',
            'product.website_access_password' => 'required_if:product.technical_support,false', */

        ];
    }
}
