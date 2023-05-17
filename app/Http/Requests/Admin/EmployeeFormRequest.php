<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeFormRequest extends FormRequest
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
            'first_name' => ['required', 'string'],
            'last_name' => ['required', 'string'],
            'full_name' => ['required', 'string'],
            'email' => ['required', 'string'],
            'birthday' => ['required', 'string'],
            'gender' => ['required', 'string'],
            'visa_type' => ['required', 'string'],
            'visa_exipre_date' => ['required', 'string'],
            'contact' => ['required', 'string'],
            'image' => ['required', 'mimes:png,jpg,jpeg'],
            'current_address' => ['required', 'string'],
            'join_date' => ['required', 'string'],
            'resident_country' => ['required', 'string'],
            'special_note' => ['required', 'string'],
            'department' => ['required', 'string'],
        ];
    }
}