<x-ads.list-element name="{{ __('Свой материал') }}">
    {{ yesOrNo($ad->own_music) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Кавер группа') }}">
    {{ yesOrNo($ad->cover_band) }}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Коммерческий проект') }}">
    {{ yesOrNo($ad->commercial_project) }}
</x-ads.list-element>

@if ($ad->commercial_project)
    <x-ads.list-element name="{{ __('Зарплата: ') }}">
        {{number_format($ad->salary, 2, '.', ' ')}} {{__(' руб.')}}
    </x-ads.list-element>
@endif