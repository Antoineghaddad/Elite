<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class MassageRequest extends FormRequest
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
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            'price' => 'required',
            'description' => 'required',
            'massager_id' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'title is required!',

            'price.required' => 'price is required!',

            'description.required' => 'description is required!',

            'massager_id.required' => 'Massager is required',

            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
            'image.required' => 'image is required!',
           
            


        ];
    }
}
