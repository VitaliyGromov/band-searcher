<x-ads.list-element name="{{ __('Готов у переезду') }}">
    {{ yesOrNo($ad->ready_to_move) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Готов ехать в тур') }}">
    {{ yesOrNo($ad->ready_to_tour) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Есть свой инструмент') }}">
    {{ yesOrNo($ad->own_instrument) }}
</x-ads.list-element>