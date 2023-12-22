<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CustomerRequest extends FormRequest
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
            'name' => 'required',
            'last_name' => 'required',
            'phone_number' => 'required',
            'customer_number' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'bank_account' => 'required',
            'email' => 'required',
            'in_the_name_of' => 'required'
        ];
    }
}
