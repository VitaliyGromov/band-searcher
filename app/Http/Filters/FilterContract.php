<?php
namespace App\Http\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;

interface FilterContract
{
    public function apply(Builder $builder);
}

?>