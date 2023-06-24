<?php
namespace App\Http\Filters;

use Illuminate\Contracts\Database\Eloquent\Builder;
use App\Contracts\FilterContract;

abstract class AbstractFilter implements FilterContract
{
    private array $queryParams = [];

    public function __construct(array $queryParams)
    {
        $this->queryParams = $queryParams;
    }

    abstract protected function getCallbacks(): array;

    public function apply(Builder $builder)
    {
        foreach($this->getCallbacks() as $name => $callback)
        {
            if(isset($this->queryParams[$name])){
                call_user_func($callback, $builder, $this->queryParams[$name]);
            }
        }
    }
}

?>