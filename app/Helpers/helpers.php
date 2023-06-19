<?php

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;

if(!function_exists('yesOrNo')){
    
    function yesOrNo(bool $var): string
    {
        return $var ? "Да" : "Нет";
    }
}

if(!function_exists('getFilteredModel')){

    function getFilteredModel(Request $request, string $modelName, string $filterName): Builder
    {
        $validated = $request->validated();

        $model = app()->make("$modelName");

        $filter = app()->make($filterName, ['queryParams' => array_filter($validated, 'strlen')]);

        return $model::filter($filter);
    }
}

?>
