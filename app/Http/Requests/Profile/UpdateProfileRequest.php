<?php

namespace App\Http\Requests\Profile;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProfileRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^8|\+7[0-9]{10}/']
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Поле "Имя" не должно быть пустым',
            'name.string' => 'Поле "Имя" должно быть строкой',
            'name.max:255' => 'Имя не может состоять более чем из 255 символов', //TODO complete validation messages
        ];
    }
}
