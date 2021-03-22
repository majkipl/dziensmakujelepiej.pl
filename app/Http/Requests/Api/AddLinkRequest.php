<?php

namespace App\Http\Requests\Api;

use Illuminate\Foundation\Http\FormRequest;

class AddLinkRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules(): array
    {

        return [
            'url' => 'bail|required|max:512|url',
            'product_id' => 'required|integer|exists:products,id'
        ];
    }

    /**
     * @return string[]
     */
    public function messages(): array
    {
        return [
            'required' => 'Pole jest wymagane.',
            'string' => 'Wprowadź wartość tekstową.',
            'max' => 'Pole wymaga maksymalnie :max znaków.',
            'integer' => 'Wprowadź wartość liczbową.',
            'exists' => 'Wpis nie istnieje.',
            'url' => 'Wprowadź url.'
        ];
    }
}
