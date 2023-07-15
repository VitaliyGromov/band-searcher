<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdFormRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation(): void
    {
        if($this->input('band_name') == null){
            $this->request->remove('band_name');
        }

        $this->merge([
            'own_instrument' => $this->has('own_instrument')?true:false,
            'ready_to_move' => $this->has('ready_to_move')?true:false,
            'ready_to_tour' => $this->has('ready_to_tour')?true:false,

            'own_music' => $this->has('own_music')?true:false,
            'cover_band' => $this->has('cover_band')?true:false,
            'commercial_project' => $this->has('commercial_project')?true:false,
        ]);
    }

    public function rules(): array
    {
        return [
            'band_name' => ['sometimes', 'string', 'max:255'],
            'region' => ['required', 'string'],
            'city' => ['required', 'string'],
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
            'cover_band' => ['nullable'],
            'commercial_project' => ['nullable'],

            'salary' => ['nullable', 'numeric'],

            'genre_id' => ['required'],

            'vk' => ['required', 'string'],
            'youtube' => ['required', 'string'],

            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^8|\+7[0-9]{10}/'],

            'status' => ['sometimes', 'string'],
            'type' => ['required', 'string'],

        ];
    }

    public function messages(): array
    {
        return [
            'region.required' => 'Укажите ваше регион',
            'city.required' => 'Укажите ваш город',
            'skill_id' => 'Укажите ваш навык',
            'genre_id' => 'Укажите жанр',

            'vk.required' => 'Это поле обязательно для заполнения',
            'vk.string' => 'Это поле должно быть строкой',
            
            'youtube.required' => 'Это поле обязательно для заполнения',
            'youtube.string' => 'Это поле должно быть строкой',

            'own_experience.required' => 'Укажите ваш опыт',
            'own_concert_experience' => 'Укажите ваш концертный опыт',
            'applicant_experience' => 'Укажите опыт соискателя',
            'applicant_concert_experience' => 'Укажите концертный опыт соискателя',

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
