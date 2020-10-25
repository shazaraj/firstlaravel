<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OfferRequest extends FormRequest
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
            'name' => 'required|max:100|unique:offers,name',
            'price' => 'required|numeric',
            'image',
            'details' => 'required|max:100',
        ];
    }

    public function messages()
    {
        return [
            'name.unique' => trans('messages.offer name unique'),
            'name.required' => trans('messages.offer name required'),
            'price.required' => trans('messages.offer price required'),
            'details.required' => trans('messages.offer details required'),
        ];
    }
}
