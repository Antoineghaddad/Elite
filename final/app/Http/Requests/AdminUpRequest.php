<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AdminUpRequest extends FormRequest
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
            'firstname' => 'required|max:50|bail',
            'lastname' => 'required|max:50|bail',
           
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',


        ];
    }
    public function messages()
    {
        return [
          

            'firstname.required' => 'firstname is required!',
            'firstname.max' => 'firstame must me max of 50 characters!',

            'lastname.required' => 'firstname is required!',
            'lastname.max' => 'firstame must me max of 50 characters!',

            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
           
            


        ];
    }
}
