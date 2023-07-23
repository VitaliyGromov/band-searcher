@php
use App\Models\Genre;
use App\Models\Skill;
use App\Enums\Types;

if($ad->salary){
    $salary = salaryFormat($ad->salary);
} else {
    $salary = 'Не указана';
}

@endphp

<x-card.index>
    <x-card.header>
        {{$ad->type}}
    </x-card.header>
    <x-card.body>
        <x-card.title>
            {{__('Скилл: ')}} {{Skill::getSkillNameById($ad->skill_id)}}
        </x-card.title>
        <p class="card-text">{{__('Жанр: ')}} {{Genre::getGenreNameById($ad->genre_id)}}</p>
        @if ($ad->type == Types::fromArtist->value)
            <p class="card-text">{{ __('Свой инструмент: ') }} {{ yesOrNo($ad->own_instrument) }}</p>
            <p class="card-text">{{ __('Готов к переезду: ') }} {{ yesOrNo($ad->ready_to_move) }}</p>
            <p class="card-text">{{ __('Готов ехать в тур: ') }} {{ yesOrNo($ad->ready_to_tour) }}</p>
        @else
            <p class="card-text">{{ __('Свой материал: ') }} {{ yesOrNo($ad->own_music) }}</p>
            <p class="card-text">{{ __('Кавер группа: ') }} {{ yesOrNo($ad->cover_band) }}</p>
            <p class="card-text">{{ __('Коммерческий проект: ') }} {{ yesOrNo($ad->commercial_project) }}</p>
        @endif
        <p class="card-text">{{__('Зарплата: ')}} {{$salary}}</p>
        <a href="{{route('ads.show', $ad->id)}}" class="btn btn-primary">{{__('Перейти к объявлению')}}</a>
    </x-card.body>
</x-card.index>