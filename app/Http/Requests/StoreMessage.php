<?php

namespace Iplayfootball\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreMessage extends FormRequest
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
            'subject' => 'bail|required|max:255',
            'body' => 'required',
            // 'sender' => 'required|integer',
            // 'message_type' => 'required|integer',
            'to' => 'required|string',
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
            'subject.required' => 'A subject is required',
            'body.required'  => 'A body is required',
            'to.required' => 'A receiver is required',
        ];
    }
}
