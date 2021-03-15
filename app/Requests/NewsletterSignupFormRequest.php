<?php

namespace App\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NewsletterSignupFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'firstName' => 'required',
            'lastName' => 'required',
            'emailAddress' => 'required|email',
            'digistore24Id' => 'required',
            'list' => 'required'
        ];
    }
}
