<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ArtiRequest extends FormRequest
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
            //
            'name' =>'required|string|max:10|min:3',
            'details' =>'required|string|max:10|min:3',
            'slug' =>'required|unique:articles|string|max:10|min:3',
            'is_used' =>'required|string|max:1',
            'category_ids'=>'required',
            'category_ids.*'=>'exists:categories,id'
        ];
    }
}
