<?php

namespace Iplayfootball\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUser extends FormRequest
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
            'status' => 'bail|required|integer',
            'type' => 'string',
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
            'name.required' => 'A name is required',
            'email.required' => 'Email is required',
            'phone.required'  => 'Phone Number is required',
            'password.required' => 'Password is required',
            'role.required' => 'Role is required',
            'password.same' => 'Password do not match',
            'status.required' => 'Your Status is required',
            'type.string' => 'Your User type is must be a string',
            'state.string' => 'Your state is must be a string',
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
