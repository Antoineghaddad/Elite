<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ChallengeRequest extends FormRequest
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
           
            'move1' => 'required',
            'reps1' => 'required',
            'image1' => 'required|mimes:jpeg,jpg,png,gif|max:10000',


            'move2' => 'required',
            'reps2' => 'required',
            'image2' => 'required|mimes:jpeg,jpg,png,gif|max:10000',


            'move3' => 'required',
            'reps3' => 'required',
            'image3' => 'required|mimes:jpeg,jpg,png,gif|max:10000',


            'move4' => 'required',
            'reps4' => 'required',
            'imag4' => 'required|mimes:jpeg,jpg,png,gif|max:10000',


            'move5' => 'required',
            'reps5' => 'required',
            'image5' => 'required|mimes:jpeg,jpg,png,gif|max:10000',


            'move6' => 'required',
            'reps6' => 'required',
            'image6' => 'required|mimes:jpeg,jpg,png,gif|max:10000',

        
        ];
    }
    public function messages()
    {
        return [

            'move1.required' => 'move is required',
            'move2.required' => 'move is required',
            'move3.required' => 'move is required',
            'move4.required' => 'move is required',
            'move5.required' => 'move is required',
            'move6.required' => 'move is required',

            'reps1.required' => 'reps are required',
            'reps2.required' => 'reps are required',
            'reps3.required' => 'reps are required',
            'reps4.required' => 'reps are required',
            'reps5.required' => 'reps are required',
            'reps6.required' => 'reps are required',

            'image1.required' => 'image is required',
            'image1.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image1.max' => 'image must be maximum 10000!',


            'image2.required' => 'image is required',
            'image2.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image2.max' => 'image must be maximum 10000!',


            'image3.required' => 'image is required',
            'image3.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image3.max' => 'image must be maximum 10000!',

            'image4.required' => 'image is required',
            'image4.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image4.max' => 'image must be maximum 10000!',

            'image5.required' => 'image is required',
            'image5.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image5.max' => 'image must be maximum 10000!',

            'image6.required' => 'image is required',
            'image6.mimes' => 'image must be of type jpeg,jpg,png,gif!',
            'image6.max' => 'image must be maximum 10000!',

            


        ];
    }
}
