<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdFilterRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'applicant_experience' => ['nullable', 'integer'],
            'applicant_concert_experience' => ['nullable', 'integer'],

            'region_id' => ['nullable', 'integer'],
            'city_id' => ['nullable', 'integer'],

            'cover_band' => ['nullable', 'string'],

            'type' => ['nullable', 'integer']
        ];
    }
}
