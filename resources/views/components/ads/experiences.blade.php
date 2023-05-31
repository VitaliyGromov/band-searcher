@php
    use App\Models\Experience;
@endphp

<x-ads.list-element name="{{ __('Опыт') }}">
    {{Experience::getExperienceNameById($ad->applicant_experience)}}
</x-ads.list-element>

<x-ads.list-element name="{{ __('Концертный опыт') }}">
    {{Experience::getExperienceNameById($ad->applicant_concert_experience)}}
</x-ads.list-element>