@php
    use App\Helpers\AdFieldsHendler;
    
    $adFieldsHendler = new AdFieldsHendler($ad);

@endphp

<x-ads.list-element name="{{ __('Готов у переезду') }}">
    {{ $adFieldsHendler->isReadyToMove() }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Готов ехать в тур') }}">
    {{ $adFieldsHendler->isReadyToTour() }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Есть свой инструмент') }}">
    {{ $adFieldsHendler->isOwnInstrument() }}
</x-ads.list-element>