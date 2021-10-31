<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MovieCreateRequest extends FormRequest
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
            'year' => 'required'
        ];
    }

    public function messages()
    {
        return [
            'title.required' => "Je moet een titel opgeven",
            'year.required' => "Het jaar is te belangrijk om over te slaan."
        ];
    }

}
