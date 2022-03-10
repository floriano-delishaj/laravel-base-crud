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
            'title' => 'required|min:5|max:150',
            'series' => 'required|min:5|max:100',
            'type'=> 'nullable|min:5|max:100',
            'sale_date'=> 'required',
            'price' => 'required|numeric|max:10',
            'thumb' => 'nullable|url',
            'description' => 'nullable|min:10'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => '<span class="message-is-invalid">Titolo</span> obbligatorio',
            'title.min' => 'Il <span class="message-is-invalid">titolo</span> dev\'essere di almeno 5 caratteri',
            'title.max' => 'Il <span class="message-is-invalid">titolo</span> dev\'essere lungo massimo 150 caratteri',
            'series.required' => '<span class="message-is-invalid">Serie</span> obbligatoria',
            'series.min' => 'La <span class="message-is-invalid">serie</span> dev\'essere di almeno 5 caratteri',
            'series.max' => 'La <span class="message-is-invalid">serie</span> dev\'essere lungo massimo 100 caratteri',
            'type.min' => 'Il <span class="message-is-invalid">tipo</span> dev\'essere di almeno 5 caratteri',
            'type.max' => 'Il <span class="message-is-invalid">tipo</span> dev\'essere lungo massimo 100 caratteri',
            'sale_date.required' => '<span class="message-is-invalid">Data di vendita</span> obbligatoria',
            'price.required' =>'<span class="message-is-invalid">Prezzo</span> obbligatorio',
            'price.numeric' => 'Il <span class="message-is-invalid">prezzo</span> dev\'essere un numero',
            'price.max' => 'Il <span class="message-is-invalid">prezzo</span> deve avere massimo di 10 numeri',
            'thumb.url' => 'Devi inserire un <span class="message-is-invalid">URL</span> valido',
            'description.min' => 'La <span class="message-is-invalid">descrizione</span> dev\'essere di almeno 10 caratteri'
        ];
    }
}
