<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PharmacyStoreRequest extends FormRequest
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


    public function rules()
    {
        $afghanistanID = 1;
        $rules =  [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:users',
            'phone' => 'required|numeric',

            'name' => 'required',
            'country' => 'required',
            'address' => 'required',
            'logo' => 'required',
        ];

        if(request('country') == $afghanistanID) {
            $rules['provinces'] = 'required';
        } else {
            $rules['city'] = 'required';
        }
        return $rules;
    }

    public function messages()
    {
        return [
            'first_name.required' => 'First name is required',
            'last_name.required'  => 'last name is required',
            'email.required'  => 'Email is required',
            'phone.required'  => 'Phone is required',
            'name.required'  => 'Name is required',
            'country.required'  => 'Country is required',
            'province.required'  => 'Province is required',
            'address.required'  => 'Address is required',

        ];
    }
}
