<?php
declare(strict_types=1);

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class UserFilter extends ModelFilter
{
    public function id(int $id): static
    {
        return $this->where('id', $id);
    }

    public function name(string $name): static
    {
        return $this->where('name', 'ILIKE', "%$name%");
    }

    public function lastName(string $lastName): static
    {
        return $this->where('last_name', 'ILIKE', "%$lastName%");
    }

    public function email(string $email): static
    {
        return $this->where('email', 'ILIKE', "%$email%");
    }
}