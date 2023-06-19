<?php
namespace App\Http\Filters\Users;

use App\Http\Filters\AbstractFilter;
use Illuminate\Database\Eloquent\Builder;

class UserFilter extends AbstractFilter
{
    public function getCallbacks(): array
    {
        return [
            'id' => [$this, 'id'],
            'name' => [$this, 'name'],
            'last_name' => [$this, 'lastName'],
            'email' => [$this, 'email'],
        ];
    }

    public function id(Builder $builder, $value)
    {
        $builder->where('id', $value);
    }

    public function name(Builder $builder, $value)
    {
        $builder->where('name', 'ILIKE', "%$value%");
    }

    public function lastName(Builder $builder, $value)
    {
        $builder->where('last_name', 'ILIKE', "%$value%");
    }

    public function email(Builder $builder, $value)
    {
        $builder->where('email', 'ILIKE', "%$value%");
    }
}

?>