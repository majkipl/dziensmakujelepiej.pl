<?php

namespace App\Http\Requests;

use App\Enums\Purchase;
use App\Enums\Whence;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreApplicationRequest extends FormRequest
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
    public function rules(): array
    {
        $rules = [
            'name' => 'bail|required|string|min:3|max:128',
            'email' => 'bail|required|email:rfc,dns|unique:applications,email',
            'phone' => [
                'bail',
                'required',
                'regex:/^\+48(\s)?([1-9]\d{8}|[1-9]\d{2}\s\d{3}\s\d{3}|[1-9]\d{1}\s\d{3}\s\d{2}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{3}\s\d{2}|[1-9]\d{1}\s\d{2}\s\d{2}\s\d{3}|[1-9]\d{1}\s\d{4}\s\d{2}|[1-9]\d{2}\s\d{2}\s\d{2}\s\d{2}|[1-9]\d{2}\s\d{3}\s\d{2}|[1-9]\d{2}\s\d{4})$/'
            ],
            'street' => 'bail|required|string|min:3|max:128',
            'flat' => 'bail|required|string|min:3|max:16',
            'zip' => 'bail|required|regex:/^[0-9]{2}\-[0-9]{3}$/',
            'city' => 'bail|required|string|min:3|max:128',
            'purchase' => [
                'bail',
                'required',
                Rule::in(Purchase::ALL),
            ],
            'whence' => [
                'bail',
                'required',
                Rule::in(Whence::ALL),
            ],
            'img_receipt' => 'bail|required|file|mimes:jpeg,jpg,png|max:4096',
            'img_ean' => 'bail|required|file|mimes:jpeg,jpg,png|max:4096',
            'img_box' => 'bail|required|file|mimes:jpeg,jpg,png|max:4096',
            'legal_1' => 'bail|required',
            'legal_2' => 'bail|required',
            'legal_3' => 'bail|required',
            'legal_4' => 'bail',
        ];

        if ($this->input('whence') === 'inne') {
            $rules['whence_other'] = 'bail|required|string|min:3|max:128';
        }

        return $rules;
    }

    public function messages(): array
    {
        return [
            'required' => 'Pole jest wymagane.',
            'string' => 'Wprowadź wartość tekstową.',
            'min' => 'Pole wymaga minimum :min znaków.',
            'max' => 'Pole wymaga maksymalnie :max znaków.',
            'regex' => 'Błędny format wprowadzonych danych.',
            'voivodeship.in' => 'Wybierz prawidłową wartość.',
            'email' => 'Błędny format wprowadzonych danych.',
            'unique' => 'Adres e-mail jest już zajęty.',
            'numeric' => 'Wybierz prawidłową wartość.',
            'shop_type.in' => 'Wybierz prawidłową wartość.',
            'date_format' => 'Wprowadź datę w prawidłowym formacie: [DD-MM-YYYY].',
            'before_or_equal' => 'Wprowadź prawidłową datę.',
            'exists' => 'Wybierz prawidłową wartość.',
            'file' => 'Pole wymaga pliku.',
            'mimes' => 'Dopuszczalne typy plików jpeg,jpg,png.',
            'img_receipt.max' => 'Plik nie może być większy niż 4MB.',
            'img_ean.max' => 'Plik nie może być większy niż 4MB.',
            'img_box.max' => 'Plik nie może być większy niż 4MB.',
            'in' => 'Wybierz prawidłową opcje.'
        ];
    }
}
