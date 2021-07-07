<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class NoteRequest extends FormRequest
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
            'title'       => 'required|string|max:15',
            'description' => 'required|string|max:40'
        ];
    }

    public function message()
    {
        return [
            'title.required' => 'titl is required',
            'description.required' =>'description is required',
            'title.max' => 'title must not be more the 15 letters',
            'description.max' => 'description must not be more then 40 letters',
            'title.string' => 'title must be characters',
            'description.string' => 'description must be characters',
        ];
    }
}
