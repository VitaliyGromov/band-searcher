<?php
namespace App\Models\Traits;

use App\Contracts\FilterContract;
use Illuminate\Database\Eloquent\Builder;

trait HasFilter
{
    public function scopeFilter(Builder $builder, FilterContract $filter): Builder
    {
        $filter->apply($builder);

        return $builder;
    }
}

?>