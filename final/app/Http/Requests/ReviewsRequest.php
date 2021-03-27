<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;


class ReviewsRequest extends FormRequest
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
            'rate' => 'required',
            'Review' => 'required',


        ];
    }
    public function messages()
    {
        return [
            'fullname.required' => 'fullname is required!',

            'rate.required' => 'rate is required!',

            'Review.required' => 'Review is required',

         
            


        ];
    }
}
