<x-ads.list-element name="{{ __('Свой материал') }}">
    <x-checkbox name="own_music" boolValue="{{$ad->own_music}}"/>
</x-ads.list-element>

<x-ads.list-element name="{{ __('Кавер группа') }}">
    <x-checkbox name="cover_band" boolValue="{{$ad->cover_band}}"/>
</x-ads.list-element>

<x-ads.list-element name="{{ __('Коммерческий проект') }}">
    <x-checkbox name="commercial_project" boolValue="{{$ad->commercial_project}}"/>
</x-ads.list-element>