<?php
namespace App\Contracts;

use Illuminate\Contracts\Database\Eloquent\Builder;

interface FilterContract
{
    public function apply(Builder $builder);
}

?>