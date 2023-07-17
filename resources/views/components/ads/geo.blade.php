@php
    use App\Services\Locations\Contracts\LocationsContract;

    $locations = app(LocationsContract::class);
@endphp

<x-ads.list-element name="{{ __('Регион') }}">
    {{ $locations->getRegionNameById($ad->region) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Город') }}">
    {{ $locations->getCityNameBYId($ad->city, $ad->region)}}
</x-ads.list-element>