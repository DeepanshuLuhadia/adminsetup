<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GlobalSettingRequest extends FormRequest
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
            'name' =>'required|min:3|max:55',
            'email' =>'email|required',
            'phone_no' =>'required',
            'address' =>'required',
            'footer' =>'required',
            'logo' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
            'favicon' => 'image|mimes:jpeg,png,jpg,gif,svg|max:10240',
        ];
    }
}