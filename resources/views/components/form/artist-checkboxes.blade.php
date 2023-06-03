<x-ads.list-element name="{{ __('Готов у переезду') }}">
    <x-checkbox name="redy_to_move" boolValue="{{$ad->ready_to_move}}"/>
</x-ads.list-element>

<x-ads.list-element name="{{ __('Готов ехать в тур') }}">
    <x-checkbox name="redy_to_tour" boolValue="{{$ad->ready_to_tour}}"/>
</x-ads.list-element>

<x-ads.list-element name="{{ __('Есть свой инструмент') }}">
    <x-checkbox name="own_instrument" boolValue="{{$ad->own_instrument}}"/>
</x-ads.list-element>