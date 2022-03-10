<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ComicStoreRequest extends FormRequest
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
            'title' => 'required|min:5',
            'series' => 'required|min:5',
            'type'=> 'nullable|min:5',
            'sale_date'=> 'required',
            'price' => 'required|numeric',
            'thumb' => 'nullable|url',
            'description' => 'nullable|min:10'
        ];
    }
}
