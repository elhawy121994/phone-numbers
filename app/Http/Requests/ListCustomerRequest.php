<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ListCustomerRequest extends FormRequest
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
            'per_page' => 'numeric|nullable',
            'page' => 'numeric|nullable',
            'code' => 'numeric|nullable',
            'is_valid' => 'boolean|nullable',
        ];
    }
}
