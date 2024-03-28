<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class FinanceRequest extends FormRequest
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
            'vehicle' => 'required',
            'title' => 'required',
            'first_name' => 'required',
            'mobile' => 'required',
            'email' => 'required|email',
            'adress_year' => 'required',
            'adress_month' => 'required',
            'emp_year' => 'required',
            'emp_month' => 'required',
            'bank_year' => 'required',
            'bank_month' => 'required',
        ];
    }
}
