<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        if(request()->type == 1){  // typ of bands is 0, type of artist is 1
            $bandNameRule = 'sometimes';
        } else {
            $bandNameRule = 'required';
        }

        return [
            'region_id' => ['required'],
            'city_id' => ['required'],
            'skill_id' => ['required'],

            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'band_name' => [$bandNameRule, 'string', 'max:256'],

            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^8|\+7[0-9]{10}/']

        ];
    }

    public function messages(): array
    {
        return [
            'region_id.required' => 'Укажите ваше регион',
            'city_id.required' => 'Укажите ваш город',
            'skill_id' => 'Укажите ваш навык',

            'name.required' => 'Поле "Имя" не должно быть пустым',
            'name.string' => 'Поле "Имя" должно быть строкой',
            'name.max:255' => 'Имя не может состоять более чем из 255 символов',

            'last_name.required' => 'Поле "Фамилия" не должно быть пустым',
            'last_name.string' => 'Поле "Фамилия" должно быть строкой',
            'last_name.max:255' => 'Фамилия не может состоять более чем из 255 символов',

            'email.required' => 'Email не может быть пустым',
            'email.string' => 'Email должен быть строкой',
            'email.email' => 'Укажите верный формат',
            'email.max:255' => 'Email не может состоять более чкем из 255 символов',

            'phone.required' => 'Поле "Телефон" не может быть пустым',
            'phone.regex:/^8|\+7[0-9]{10}/' => 'Введите верный формат телефона',
        ];
    }
}
