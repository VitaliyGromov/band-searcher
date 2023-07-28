<?php

declare(strict_types=1);

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
            'applicant_experience' => ['nullable', 'string'],
            'applicant_concert_experience' => ['nullable', 'string'],

            'region' => ['nullable', 'integer'],
            'city' => ['nullable', 'integer'],

            'skill_id' => ['nullable', 'integer'],
            'genre_id' => ['nullable', 'integer'],

            'band_name' => ['nullable', 'string'],

            'cover_band' => ['nullable', 'integer'],
            'own_music' => ['nullable', 'integer'],
            'commercial_project' => ['nullable', 'integer'],

            'own_instrument' => ['nullable', 'integer'],
            'ready_to_tour' => ['nullable', 'integer'],
            'ready_to_move' => ['nullable', 'integer'],

            'salary' => ['nullable', 'integer'],

            'type' => ['nullable', 'string'],

            'status' => ['nullable', 'string'],
        ];
    }
}
