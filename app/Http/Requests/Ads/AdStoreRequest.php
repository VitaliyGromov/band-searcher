<?php

namespace App\Http\Requests\Ads;

use Illuminate\Foundation\Http\FormRequest;

class AdStoreRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    protected function prepareForValidation()
    {
        if(request()->type == 1){  // typ of bands is 0, type of artist is 1
            $bandNameRule = 'sometimes';
        } else {
            $bandNameRule = 'required';
        }
    }

    public function rules(): array
    {
        return [
            'region_id' => ['required'],
            'city_id' => ['required'],
            'skill_id' => ['required'],

            'name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],

            'email' => ['required', 'string', 'email', 'max:255'],
            'phone' => ['required', 'regex:/^8|\+7[0-9]{10}/']

        ];
    }
}
