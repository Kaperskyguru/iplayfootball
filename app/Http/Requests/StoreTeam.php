<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreTeam extends FormRequest
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
            'firstname' => 'bail|required|max:50|string',
            'lastname' => 'bail|required|max:50|string',
            'email' => 'bail|required|email',
            'number' => 'bail|required|alpha_num|max:14',
            // 'dob' => 'date',
            'address' => 'bail|required|string',
            'package' => 'bail|required|integer',
            'team_status' => 'bail|required|integer',
            'picture' => 'image',
        ];
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'firstname.required' => 'A first name is required',
            'lastname.required'  => 'A last name is required',
            'email.required' => 'Email is required',
            'number.required'  => 'Phone Number is required',
            // 'licence.required' => 'Licence is required',
            // 'team.required'  => 'Team ID is required',
            'address.required'  => 'Your address is required',
            'package.required'  => 'Package is required',
            // 'sex.required'  => 'Your gender is required',
            'scout_status.required'  => 'Status is required',
            'picture.image'  => 'Picture must be image file only',
        ];
    }
}