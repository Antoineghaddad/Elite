<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserRequest extends FormRequest
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
            'email' => 'required|email|unique:admins|bail',
            'name' => 'required|max:50|bail',
            'password' => 'required|min:6|bail',
            'age' => 'required',
            'phone' => 'required|numeric',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',

        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.email' => 'Email must be of type email!',
            'email.unique' => 'Email must be unique!',

            'name.required' => 'firstname is required!',
            'name.max' => 'firstame must me max of 50 characters!',

            'password.required' => 'Password is required!',
            'password.min' => 'Password must contain at least 6 character!',

            'age.required' => 'age is required!',
            'phone.required' => 'Phone is required!',


            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
           
            


        ];
    }
}
