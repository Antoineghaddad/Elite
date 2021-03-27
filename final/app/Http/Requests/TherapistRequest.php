<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class TherapistRequest extends FormRequest
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
            'fullname' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'description' => 'required',
            'certification' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'fullname is required!',

            'description.required' => 'description is required!',

            'certification.required' => 'certifications are required',

            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
            'image.required' => 'image is required!',
           
            


        ];
    }
}
