<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class UserLoginRequest extends FormRequest
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
           
            'email' => 'required|email|exists:users|bail',
            'password' => 'required|min:6|bail',
        
        ];
    }
    public function messages()
    {
        return [


            'email.required' => 'Username and password required!',
            'email.exists' => 'Invalid Username or password',
            'email.email' => 'email must be of type email',
            'password.min' => 'password must be at least 6 characters',
            'password.required' => 'Username and password required!',
            


        ];
    }
}
