<?php

declare(strict_types=1);

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class GenreFilter extends ModelFilter
{
    public function name(string $name): static
    {
        return $this->where('name', 'ILIKE', "%$name%");
    }
}
