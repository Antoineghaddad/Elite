<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class WorkoutRequest extends FormRequest
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
            'type' => 'required',
            'title' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,gif,webp|max:10000',
            'price' => 'required',
            'description' => 'required',
            'trainer_id' => 'required',

        ];
    }
    public function messages()
    {
        return [
            'title.required' => 'title is required!',
            'type.required' => 'type is required!',

            'price.required' => 'price is required!',

            'description.required' => 'description is required!',

            'trainer_id.required' => 'trainer is required',

            'image.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image.max' => 'image must be maximum 10000!',
            'image.required' => 'image is required!',
           
            


        ];
    }
}
