<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

if(!function_exists('yesOrNo')){
    
    function yesOrNo(bool $var): string
    {
        return $var ? "Да" : "Нет";
    }
}

if(!function_exists('getModelFieldById')){
    
    function getModelFieldById(Model $model, int $id, mixed $field){

        $table = $model->getTable();

        DB::table($table)->where('id', $id)->value($field);
    }
} // TODO доработать