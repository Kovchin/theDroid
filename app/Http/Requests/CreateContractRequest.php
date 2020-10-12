<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CreateContractRequest extends FormRequest
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
            'name' => 'string|required',
            'nickName' => 'string|required',
            //'path' => 'integer|nullable',
            'path' => 'string|nullable',
            'description' => 'string|nullable',
            'start' => 'date|nullable',
            'end' => 'date|nullable',
            'counterpartyA_id' => 'integer|required',
            'counterpartyB_id' => 'integer|required',
            'countsSli' => 'integer|nullable'
        ];
    }
}
