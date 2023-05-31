@php
    use App\Models\Skill;
@endphp

<x-ads.list-element name="{{ __('Навык') }}">
    {{ Skill::getSkillNameById($ad->skill_id) }}
</x-ads.list-element>