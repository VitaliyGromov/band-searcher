@php
  
use App\Helpers\AdFieldsHendler;
use App\Models\Region;
use App\Models\City;
use App\Models\Skill;
use App\Models\Status;

@endphp

<table class="table">
    <thead>
      <tr>
        <th scope="col">{{ __('id') }}</th>
        <th scope="col">{{ __('Регион') }}</th>
        <th scope="col">{{ __('Город') }}</th>
        <th scope="col">{{ __('Навык') }}</th>
        <th scope="col">{{ __('Название группы')}}</th>
        <th scope="col">{{ __('Тип') }}</th>
        <th scope="col">{{ __('Статус') }}</th>
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
        <td>{{ Region::getRegionNameById($ad->region) }}</td>
        <td>{{ City::getCityNameById($ad->city) }}</td>
        <td>{{ Skill::getSkillNameById($ad->skill_id) }}</td>
        @if (!is_null($ad->band_name))
          <td>{{$ad->band_name}}</td>
        @else
          <td>-</td>
        @endif
          <td>{{ $adFieldsHendler->handleType() }}</td>
          <td> {{Status::getStatusNameById($ad->status) }} </td>
        <td>
          <x-button-link href="{{ route($routeForButton, $ad->id) }}">
            {{ __('Перейти к объявлению')}}
          </x-button-link>
        </td>
      </tr>
      @endforeach
    </tbody>
</table>

@props(['routeForButton' => ''])