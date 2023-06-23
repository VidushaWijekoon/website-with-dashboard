<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostFormRequest extends FormRequest
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
            'title' => ['required', 'string'],
            'slug' => ['required', 'string'],
            'category' => ['required', 'string'],
            'post_summery' => ['required'],
            'title_image' => ['nullable'],
            'post_description' => ['required', 'string'],
            'contact_number' => ['required', 'string'],
            'contact_email' => ['required', 'string'],
            'post_status' => ['nullable'],
            'pricing' => ['nullable', 'string'],
            'conditions' => ['required', 'nullable'],

            'image' => ['nullable',  'max:51200'],
            'video' => ['nullable', 'max:51200'],
            'document' => ['nullable', 'max:51200'],

        ];
    }
}
