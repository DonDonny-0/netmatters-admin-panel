<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEmployeeRequest extends FormRequest
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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'personal_email' => ['required', 'string', 'email', 'max:255', 'unique:employees'],
            'phone' => ['required', 'string', 'max:255'],
            'company_id' => ['required', 'integer', 'exists:companies,id'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => 'first name is required',
            'last_name.required' => 'last name is required',

            'personal_email.required' => 'personal email is required',
            'personal_email.email' => 'this email is not valid',

            'phone.required' => 'phone is required',
            'company_id.required' => 'company is required',
        ];
    }
}
