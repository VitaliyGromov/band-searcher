@php

use App\Helpers\AdFieldsHendler;
use App\Models\Genre;
use App\Models\Skill;

$adFieldsHendler = new AdFieldsHendler($ad);

@endphp

@if ($ad->type)

  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">{{__('Объявление от артиста')}}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ __('Навык: ') }} {{ Skill::getSkillNameById($ad->skill_id) }}</li>
      <li class="list-group-item">{{ __('Жанр: ') }} {{ Genre::getGenreNameById($ad->genre_id) }}</li>
      <li class="list-group-item">{{ __('Свой инструмент: ') }} {{ $adFieldsHendler->isOwnInstrument() }}</li>
      <li class="list-group-item">{{ __('Готов к переезду: ') }} {{ $adFieldsHendler->isReadyToMove() }}</li>
      <li class="list-group-item">{{ __('Готов ехать в тур: ') }} {{ $adFieldsHendler->isReadyToTour() }}</li>
    </ul>
    <div class="card-body">
      <a href="{{route('ads.show', $ad->id)}}" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>

@else

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ __('Объявление от группы') }} {{$ad->band_name}}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ __('Жанр: ') }} {{ Genre::getGenreNameById($ad->genre_id) }}</li>
      <li class="list-group-item">{{ __('Свой материал: ') }} {{ $adFieldsHendler->isOwnMusic() }}</li>
      <li class="list-group-item">{{ __('Кавер группа: ') }} {{ $adFieldsHendler->isCoverBand() }}</li>
      <li class="list-group-item">{{ __('Коммерческий проект: ') }} {{ $adFieldsHendler->isCommercialProject() }}</li>
      @if ($ad->commercial_project)
        <li class="list-group-item">{{ __('Зарплата: ') }} {{number_format($ad->salary, 2, '.', ' ')}} {{__(' руб.')}}</li>
      @endif
      <li class="list-group-item ">{{'Требуемы навык: '}} {{ Skill::getSkillNameById($ad->skill_id) }}</li>
    </ul>
    <div class="card-body">
      <a href="{{route('ads.show', $ad->id)}}" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>

@endif
