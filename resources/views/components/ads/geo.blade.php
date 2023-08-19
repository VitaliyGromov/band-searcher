@php
    use App\Services\Regions\Facades\RegionsFacade;
    use App\Services\Cities\Facades\CitiesFacade;
@endphp

<x-ads.list-element name="{{ __('Регион') }}">
    {{ RegionsFacade::getRegionNameById($ad->region) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Город') }}">
    {{ CitiesFacade::getCityNameById($ad->city, $ad->region)}}
</x-ads.list-element>