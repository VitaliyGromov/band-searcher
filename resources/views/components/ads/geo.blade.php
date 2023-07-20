@php
    use App\Services\Locations\Facades\LocationFacade;
@endphp

<x-ads.list-element name="{{ __('Регион') }}">
    {{ LocationFacade::getRegionNameById($ad->region) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Город') }}">
    {{ LocationFacade::getCityNameById($ad->city, $ad->region)}}
</x-ads.list-element>