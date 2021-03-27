<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class AdminLoginRequest extends FormRequest
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
           
            'username' => 'required|min:5|exists:admins|bail',
            'password' => 'required|min:5|bail',
        
        ];
    }
    public function messages()
    {
        return [


            'username.required' => 'Username and password required!',
            'username.exists' => 'Invalid Username or password',
            'username.min' => 'Username must be at least 5 characters',
            'password.min' => 'password must be at least 5 characters',
            'password.required' => 'Username and password required!',
            


        ];
    }
}
