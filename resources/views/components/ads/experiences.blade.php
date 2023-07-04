@php
    use App\Models\Experience;
@endphp

<x-ads.list-element name="{{ __('Опыт') }}">
    {{$ad->applicant_experience}}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Концертный опыт') }}">
    {{$ad->applicant_concert_experience}}
</x-ads.list-element>