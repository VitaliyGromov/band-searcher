@php
use App\Models\Genre;
use App\Models\Skill;

$genreName = Genre::getGenreNameById($ad->genre_id);
$skill = Skill::getSkillNameById($ad->skill_id);

$ownMusic = yesOrNo($ad->own_music);
$coverBand = yesOrNo($ad->cower_band);
$commercialProject = yesOrNo($ad->commercial_project);

$ownInstrument = yesOrNo($ad->own_instrument);
$readyToMove = yesOrNo($ad->ready_to_move);
$readyToTour = yesOrNo($ad->ready_to_tour);

@endphp

@if ($ad->type)

  <div class="card" style="width: 18rem; height: 20rem;">
    <div class="card-body">
      <h5 class="card-title">{{__('Объявление от артиста')}}</h5>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ __('Навык: ') }} {{$skill}}</li>
      <li class="list-group-item">{{ __('Жанр: ') }} {{ $genreName}}</li>
      <li class="list-group-item">{{ __('Свой инструмент: ') }} {{$ownInstrument}}</li>
      <li class="list-group-item">{{ __('Готов к переезду: ') }} {{$readyToMove}}</li>
      <li class="list-group-item">{{ __('Готов ехать в тур: ') }} {{$readyToTour}}</li>
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
      <li class="list-group-item">{{ __('Жанр: ') }} {{ $genreName}}</li>
      <li class="list-group-item">{{ __('Свой материал: ') }} {{$ownMusic}}</li>
      <li class="list-group-item">{{ __('Кавер группа: ') }} {{$coverBand}}</li>
      <li class="list-group-item">{{ __('Коммерческий проект: ') }} {{$commercialProject}}</li>
      @if ($ad->commercial_project)
        <li class="list-group-item">{{ __('Зарплата: ') }} {{number_format($ad->salary, 2, '.', ' ')}} {{__(' руб.')}}</li>
      @endif
      <li class="list-group-item ">{{'Требуемы навык: '}} {{$skill}}</li>
    </ul>
    <div class="card-body">
      <a href="{{route('ads.show', $ad->id)}}" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>

@endif
