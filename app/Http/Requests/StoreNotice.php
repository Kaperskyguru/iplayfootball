<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreNotice extends FormRequest
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
            'title' => 'bail|required|max:255',
            'desc' => 'required',
            'notice_enddate' => 'required|date',
            'notice_publishdate' => 'required|date',
            'notice_startdate' => 'required|date',
            'visibility_id' => 'required|integer',
            'notice_status' => 'required|integer',
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
            'title.required' => 'A title is required',
            'desc.required'  => 'A description is required',
            'notice_enddate.required' => 'End date is required',
            'notice_publishdate.required'  => 'Publish date is required',
            'notice_startdate.required' => 'Start date is required',
            'visibility_id.required'  => 'Visibility ID is required',
            'notice_status.required'  => 'Status ID is required',
        ];
    }
}
