@php
    use App\Helpers\AdFieldsHendler;
    
    $adFieldsHendler = new AdFieldsHendler($ad);

@endphp

<x-ads.list-element name="{{ __('Свой материал') }}">
    {{ $adFieldsHendler->isOwnMusic() }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Кавер группа') }}">
    {{ $adFieldsHendler->isCoverBand() }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Коммерческий проект') }}">
    {{ $adFieldsHendler->isCommercialProject() }}
</x-ads.list-element>

@if ($ad->commercial_project)
    <x-ads.list-element name="{{ __('Зарплата: ') }}">
        {{number_format($ad->salary, 2, '.', ' ')}} {{__(' руб.')}}
    </x-ads.list-element>
@endif