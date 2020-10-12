<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateCounterpartyRequest extends FormRequest
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
            'name' => 'required|unique:counterparties|max:255',
            'phone' => 'nullable|unique:phones|max:12',
            'email' => 'nullable|email|unique:emails|max:100',
            'description' => 'nullable|max:1000',
        ];
    }
}
