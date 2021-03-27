<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AdminRequest extends FormRequest
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
            'firstname' => 'required|max:50|bail',
            'lastname' => 'required|max:50|bail',
            'password' => 'required|min:5|bail',
            'username' => 'required|min:5|bail',
            'image' => 'mimes:jpeg,jpg,png,gif|max:10000',


        ];
    }
    public function messages()
    {
        return [
            'email.required' => 'Email is required!',
            'email.email' => 'Email must be of type email!',
            'email.unique' => 'Email must be unique!',

            'firstname.required' => 'firstname is required!',
            'firstname.max' => 'firstame must me max of 50 characters!',

            'lastname.required' => 'firstname is required!',
            'lastname.max' => 'firstame must me max of 50 characters!',

            'password.required' => 'Password is required!',
            'password.min' => 'Password must contain at least 5 character!',

            'username.required' => 'Password is required!',
            'password.min' => 'username must contain at least 5 character!',


            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
           
            


        ];
    }
}
