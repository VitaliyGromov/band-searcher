<form action="{{ route('ads.update', $ad->id) }}" method="POST">
@csrf
@method('PUT')

<x-ads.section-title class="text-center">
    {{ __('Требования к соискателю')}}
</x-ads.section-title>

<x-ads.list-element name="{{ __('Навык') }}">
    <x-skills skill_id="{{$ad->skill_id}}"/>
</x-ads.list-element> 

{{-- //TODO доделать эту форму --}}

<x-ads.genre :ad="$ad"/>

<x-ads.experiences :ad="$ad"/>

@if ($ad->type)
    <x-ads.band.fields :ad="$ad"/>
@else
    <x-ads.artist.fields :ad="$ad"/>
@endif

<x-ads.section-title class="text-center">
    {{ __("О $title") }}
</x-ads.section-title>

<x-ads.genre :ad="$ad"/>

<x-ads.experiences :ad="$ad"/>

@if ($ad->type)
    <x-ads.artist.fields :ad="$ad"/>
@else
    <x-ads.band.fields :ad="$ad"/>
@endif

<x-ads.links :ad="$ad"/>

<x-ads.geo :ad="$ad"/>

<x-ads.section-title class="text-center">
    {{ __('Контактная информация') }}
</x-ads.section-title>

<x-ads.contacts :ad="$ad"/>

</form>