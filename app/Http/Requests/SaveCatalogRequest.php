<?php

namespace App\Http\Requests;
use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class SaveCatalogRequest extends FormRequest {
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize() {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules() {
        
        return [

            'title' => 'required',
            'url' => ['required',
            Rule::unique('catalogs')->ignore($this->route('catalogo'))],
            'description' => 'required',
            'img' => [$this->route('catalogo') ? 'nullable' : 'required','mimes:jpg,jpeg,png']
        ];
    }
}
