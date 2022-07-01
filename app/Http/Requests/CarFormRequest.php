<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarFormRequest extends FormRequest
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
            'model' => 'required',
            'RegNo' => 'required',
            'pricing' => 'required',
            'type' => 'required',
            'image' => 'required',
        ];
    }

    protected function prepareForValidation() {
        $this->merge([
            'model' => strip_tags($this->model),
            'RegNo' => strip_tags($this->RegNo),
            'pricing' => strip_tags($this->pricing),
            'type' => strip_tags($this->type),
            'image' => strip_tags(asset('images/'.$this->image)),
        ]);
    }
}
