<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'own_instrument' => $this->has('own_instrument')?true:false,
            'ready_to_move' => $this->has('ready_to_move')?true:false,
            'ready_to_tour' => $this->has('ready_to_tour')?true:false,

            'own_music' => $this->has('own_music')?true:false,
            'cower_band' => $this->has('cower_band')?true:false,
            'commercial_project' => $this->has('commercial_project')?true:false,

            'type'=> boolval($this->input('type')),
        ]);
    }

    public function rules(): array
    {
        return [
            'region_id' => ['required'],
            'city_id' => ['required'],
            'skill_id' => ['required'],
            'type' => ['required', 'boolean'],

            'own_experience' => ['required'],
            'own_concert_experience' => ['required'],

            'description' => ['nullable', 'string'],
            'additional_info' => ['nullable', 'string'],

            'applicant_experience' => ['required'],
            'applicant_concert_experience' => ['required'],

            'own_instrument' => ['nullable'],
            'ready_to_move' => ['nullable'],
            'ready_to_tour' => ['nullable'],

            'own_music' => ['nullable'],
            'cower_band' => ['nullable'],
            'commercial_project' => ['nullable'],

            'salary' => ['nullable', 'numeric'],

            'genre_id' => ['required'],

            'vk' => ['required', 'string'],
            'youtube' => ['required', 'string'],

            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

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
