<?php

namespace App\Http\Requests\Api;

use App\Models\Collection;
use Illuminate\Foundation\Http\FormRequest;

class AddReviewRequest extends FormRequest
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
            'customer' => 'bail|required|string|max:128',
            'content' => 'bail|required|string|max:4096',
            'collection_id' => 'bail|required|integer|exists:collections,id',
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
            'exists' => 'Wpis nie istnieje.'
        ];
    }
}
