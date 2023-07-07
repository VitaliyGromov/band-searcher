<?php
declare(strict_types=1);

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class AdFilter extends ModelFilter
{
    public function type(string $type): static
    {
        return $this->where('type', $type);
    }

    public function status(string $status): static
    {
        return $this->where('status', $status);
    }

    public function region(int $id): static
    {
        return $this->where('region_id', $id);
    }
}