@php

use App\Helpers\AdFieldsHendler;
use App\Models\Genre;
use App\Models\Skill;

$adFieldsHendler = new AdFieldsHendler($ad);

if($ad->salary){
    $salary = number_format($ad->salary, 2, '.', ' ').' руб.';
} else {
    $salary = 'Не указана';
}

@endphp

<x-card.index>
    <x-card.header>
        @if ($ad->type)
            {{__('От артиста')}}
        @else
            {{__('От группы')}} {{$ad->band_name}}
        @endif
    </x-card.header>
    <x-card.body>
        <x-card.title>
            {{__('Скилл: ')}} {{Skill::getSkillNameById($ad->skill_id)}}
        </x-card.title>
        <p class="card-text">{{__('Жанр: ')}} {{Genre::getGenreNameById($ad->genre_id)}}</p>
        @if ($ad->type)
            <p class="card-text">{{ __('Свой инструмент: ') }} {{ $adFieldsHendler->isOwnInstrument() }}</p>
            <p class="card-text">{{ __('Готов к переезду: ') }} {{ $adFieldsHendler->isReadyToMove() }}</p>
            <p class="card-text">{{ __('Готов ехать в тур: ') }} {{ $adFieldsHendler->isReadyToTour() }}</p>
        @else
            <p class="card-text">{{ __('Свой материал: ') }} {{ $adFieldsHendler->isOwnMusic() }}</p>
            <p class="card-text">{{ __('Кавер группа: ') }} {{ $adFieldsHendler->isCoverBand() }}</p>
            <p class="card-text">{{ __('Коммерческий проект: ') }} {{ $adFieldsHendler->isCommercialProject() }}</p>
        @endif
        <p class="card-text">{{__('Зарплата: ')}} {{$salary}}</p>
        <a href="{{route('ads.show', $ad->id)}}" class="btn btn-primary">{{__('Перейти к объявлению')}}</a>
    </x-card.body>
</x-card.index>