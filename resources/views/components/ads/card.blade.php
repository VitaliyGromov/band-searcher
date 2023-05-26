@php
use App\Models\Genre;
use App\Models\Skill;

$genreName = Genre::getGenreNameById($ad->genre_id);

$ownMusic = $ad->own_music ? "Да" : "Нет";
$coverBand = $ad->cower_band ? "Да" : "Нет";
$commercialProject = $ad->commercial_project ? "Да" : "Нет";

$skill = Skill::getSkillNameById($ad->skill_id);

@endphp

@if ($ad->type)

  <div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{__('Объявление от артиста')}}</h5>
      <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ __('Жанр: ') }} {{ $genreName}}</li>
      <li class="list-group-item">A second item</li>
      <li class="list-group-item">A third item</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>

@else

<div class="card" style="width: 18rem;">
    <div class="card-body">
      <h5 class="card-title">{{ __('Объявление от группы') }} {{$ad->band_name}}</h5>
      <p class="card-text">{{$ad->description}}</p>
    </div>
    <ul class="list-group list-group-flush">
      <li class="list-group-item">{{ __('Жанр: ') }} {{ $genreName}}</li>
      <li class="list-group-item">{{ __('Свой материал: ') }} {{$ownMusic}}</li>
      <li class="list-group-item">{{ __('Кавер группа: ') }} {{$coverBand}}</li>
      <li class="list-group-item">{{ __('Коммерческий проект: ') }} {{$commercialProject}}</li>
      @if ($ad->commercial_project)
        <li class="list-group-item">{{ __('Зарплата: ') }} {{number_format($ad->salary, 2, '.', ' ')}} {{__(' руб.')}}</li>
      @endif
      <li class="list-group-item">{{'Требуемы навык: '}} {{$skill}}</li>
    </ul>
    <div class="card-body">
      <a href="#" class="card-link">{{__('Перейти к объявлению')}}</a>
    </div>
  </div>

@endif
