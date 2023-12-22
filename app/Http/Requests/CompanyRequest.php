<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompanyRequest extends FormRequest
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
            'company_name' => 'required',
            'company_legal_form' => 'required',
            'adres_line' => 'required',
            'post_code' => 'required',
            'city' => 'required',
            'country' => 'required',
            'kvk_nummer' => 'required',
            'btw_id' => 'required',
            'bank_account' => 'required'
        ];
    }
}
