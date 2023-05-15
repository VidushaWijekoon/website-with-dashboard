<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PostRequestForm extends FormRequest
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
            'category_id' => ['required', 'string'],
            'post_title' => ['required', 'string', 'max:50'],
            'post_description' => ['required', 'string', 'max:1250'],
            'post_file' => ['nullable'],
            'meta_category_id' => ['required', 'string'],
            'post_meta_title' => ['required', 'string', 'max:50'],
            'post_meta_description' => ['required', 'string', 'max:1250'],
            'status' => ['nullable', 'string'],
        ];
    }
}
