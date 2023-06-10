<?php
namespace App\Http\Filters\Ads;

use App\Http\Filters\AbstractFilter;

class AdFilter extends AbstractFilter
{
    public const Id = 'id';
    
    public function getCallbacks(): array
    {
        return [];
    }
}

?>