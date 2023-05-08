<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactUsFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'contact_us_messanger_fullname' => [
                'required',
                'string'
            ],
            'contact_us_title' => [
                'required',
                'string'
            ],
            'contact_us_subject' => [
                'required',
                'string'
            ],
            'contact_us_message' => [
                'required',
                'string',
                'max:500'
            ]
        ];
    }
}
