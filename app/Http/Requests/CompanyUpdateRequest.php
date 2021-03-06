<?php

namespace App\Http\Requests;

class CompanyUpdateRequest extends Request
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
            'name'            => 'required',
            'website'         => 'required | url',
            'description'     => 'required',
            'billing_contact' => 'required',
            'billing_address' => 'required',
            'category_id'     => 'required',
            'staffing'        => 'required',
            'billing_delay'   => 'required',
            'billing_method'  => 'required',
            'logo'            => 'image',
        ];
    }
}
