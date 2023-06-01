@php
  
use App\Helpers\AdFieldsHendler;
use App\Models\Region;
use App\Models\City;
use App\Models\Skill;

@endphp

<table class="table">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">Регион</th>
        <th scope="col">Город</th>
        <th scope="col">Навык</th>
        <th scope="col">Название группы</th>
        <th scope="col">Тип</th>
        <th scope="col"></th>
      </tr>
    </thead>
    <tbody>
      @foreach ($ads as $ad)

      @php
          $adFieldsHendler = new AdFieldsHendler($ad);
      @endphp

      <tr>
        <th scope="row">{{ $ad->id}}</th>
        <td>{{ Region::getRegionNameById($ad->region_id) }}</td>
        <td>{{ City::getCityNameById($ad->city_id) }}</td>
        <td>{{ Skill::getSkillNameById($ad->skill_id) }}</td>
        @if (!is_null($ad->band_name))
          <td>{{$ad->band_name}}</td>
        @else
          <td>-</td>
        @endif
          <td>{{ $adFieldsHendler->handleType() }}</td>
        <td>
          <x-button-link href="{{ route('ads.show', $ad->id) }}">
            {{ __('Перейти к объявлению')}}
          </x-button-link>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>