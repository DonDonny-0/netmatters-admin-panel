<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCompanyRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'logo' => ['required'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:companies'],
            'website' => ['required', 'string', 'max:255'],
        ];
    }

    public function messages(): array 
    {
        return [
            'name.required' => 'company name is required',
            'logo.required' => 'company logo is required',

            'email.required' => 'company email is required',
            'email.email' => 'this email is not valid',
            'email.unique' => 'this email already exists',

            'website.required' => 'company website is required'
        ];
    }
}
