<?php

namespace App\Http\Requests\Ads;

use App\Http\Requests\Ads\Traits\HasValidationFields;
use Illuminate\Foundation\Http\FormRequest;

class AdFilterRequest extends FormRequest
{
    use HasValidationFields;

    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        $this->merge([
            $this->getFieldsForPrepareForValidation(),
        ]);
    }

    public function rules(): array
    {
        return [
            'applicant_experience' => ['nullable', 'integer'],
            'applicant_concert_experience' => ['nullable', 'integer'],

            'region_id' => ['nullable', 'integer'],
            'city_id' => ['nullable', 'integer'],

            'cover_band' => ['nullable', 'string'],
        ];
    }
}
