<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class HomeRequest extends FormRequest
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
            'about_us' => 'required',
            'missions' => 'required',



        ];
    }
    public function messages()
    {
        return [
            'about_us.required' => 'about us content is required!',
            'missions.required' => 'missions content is required!',

      
           
            


        ];
    }
}
