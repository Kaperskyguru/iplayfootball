<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePlayer extends FormRequest
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
            'name' => 'bail|required|max:50|string',
            'email' => 'bail|required|email|unique:users',
            'phone' => 'bail|required|alpha_num|max:14',
            'state' => 'string',
            'role' => 'required|integer',
            'password' => 'bail|required|string|same:password_confirmation',
            'player_status' => 'bail|required|integer',
            'player_type' => 'string',
        ];

        // 'firstname' => 'bail|required|max:50|string',
        // 'lastname' => 'bail|required|max:50|string',
        // 'email' => 'bail|required|email',
        // 'mobile' => 'bail|required|alpha_num|max:14',
        // 'dob' => 'date',
        // 'address' => 'required',
        // 'package' => 'bail|required|integer',
        // 'player_status' => 'bail|required|integer',
        // 'height' => 'bail|required|integer',
        // 'weight' => 'bail|required|integer',
        // 'facebook' => 'bail|required|string',
        // 'picture' => 'image',
        // 'sex' => 'string'
    }

    /**
     * Get the error messages for the defined validation rules.
     *
     * @return array
     */

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'email.required' => 'Email is required',
            'phone.required'  => 'Phone Number is required',
            'password.required' => 'Password is required',
            'role.required' => 'Role is required',
            'password.same' => 'Password do not match',
            'player_status.required' => 'Your Status is required',
            'player_type.string' => 'Your player type is must be a string',
        ];

        // 'firstname.required' => 'A first name is required',
        //     'lastname.required'  => 'A last name is required',
        //     'email.required' => 'Email is required',
        //     'mobile.required'  => 'Phone Number is required',
        //     'height.required' => 'Your height is required',
        //     'weight.required'  => 'Your weight is required',
        //     'address.required'  => 'Your address is required',
        //     'package.required'  => 'Package is required',
        //     'sex.required'  => 'Your gender is required',
        //     'facebook.required'  => 'Your facebook is required',
        //     'player_status.required'  => 'Status is required',
        //     'picture.image'  => 'Picture must be image file only',
        //     'dob.date' => 'Date of birth must be a date format'
    }
}
