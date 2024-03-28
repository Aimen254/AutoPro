<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PartExchangeRequest extends FormRequest
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
            'last_name' => 'required',
            'email' => 'required|email',
            'make' => 'required',
            'mobile' => 'required|numeric',
            'model' => 'required',
            'registeration' => 'required',
            'mileage' => 'required',
            'owners' => 'required',
            'fuel_type' => 'required',
            'color' => 'required',
            'transmissions' => 'required',
            'termsCheckbox' => 'required|accepted', 
        ];

    }
}
