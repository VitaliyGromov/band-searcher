<?php
namespace App\Http\Requests\Ads\Traits;

trait HasValidationFields
{
    public function getFieldsForPrepareForValidation()
    {
        return [
            'own_instrument' => $this->has('own_instrument')?true:false,
            'ready_to_move' => $this->has('ready_to_move')?true:false,
            'ready_to_tour' => $this->has('ready_to_tour')?true:false,

            'own_music' => $this->has('own_music')?true:false,
            'cover_band' => $this->has('cover_band')?true:false,
            'commercial_project' => $this->has('commercial_project')?true:false,

            'type'=> boolval($this->input('type')),
        ];
    }
}

?>