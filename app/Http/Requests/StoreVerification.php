<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreVerification extends FormRequest
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
            'accountType' => 'bail|required|string',
            'userID' => 'bail|required|integer',
            'IDNumber' => 'bail|required|string',
            'IDType' => 'bail|required|string',
            'secondFile' => 'image',
            'verification_status' => 'bail|required|integer',
            'package' => 'bail|required|integer',
            'firstFile' => 'image',
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
            'accountType.required' => 'An Account type is required',
            'userID.required'  => 'A User is required',
            'IDNumber.required' => 'Document ID number is required',
            'IDType.required'  => 'Document ID Type is required',
            'package.required'  => 'Package is required',
            'verification_status.required'  => 'Status is required',
            'secondFile.image'  => 'Picture must be image file only',
            'firstFile.image'  => 'Picture must be image file only',
        ];
    }
}
