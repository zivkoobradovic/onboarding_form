<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OnboardingRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'contact_person' => 'int',
            'contact_info.full_name' => 'required',
            'contact_info.skype_zoom' => 'required',
            'contact_info.email' => 'required',
            'platform.name' => 'required',
            'platform.password' => 'required',
            'product.product_name' => 'required',
            'product.product_type' => 'required',

        ];
    }
}
