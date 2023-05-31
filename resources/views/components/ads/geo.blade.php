@php

use App\Models\Region;
use App\Models\City;

@endphp

<x-ads.list-element name="{{ __('Регион') }}">
    {{ Region::getRegionNameById($ad->region_id) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Город') }}">
    {{ City::getCityNameById($ad->city_id) }}
</x-ads.list-element>