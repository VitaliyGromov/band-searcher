@php
use App\Models\Region;
use App\Models\City;
use App\Models\Skill;
use App\Models\Status;
use App\Services\Regions\Facades\RegionsFacade;
use App\Services\Cities\Facades\CitiesFacade;

@endphp
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-filters.ads routeName="user.ads"/>
        <x-table.table>
            <x-table.thead>
                <th scope="col">{{ __('id') }}</th>
                <th scope="col">{{ __('Регион') }}</th>
                <th scope="col">{{ __('Город') }}</th>
                <th scope="col">{{ __('Навык') }}</th>
                <th scope="col">{{ __('Название группы')}}</th>
                <th scope="col">{{ __('Тип') }}</th>
                <th scope="col">{{ __('Статус') }}</th>
                <th scope="col"></th>
                </x-table.thead>
                <x-table.tbody>
                    @foreach ($ads as $ad)
                    <tr>
                      <th scope="row">{{ $ad->id}}</th>
                      <td>{{ RegionsFacade::getRegionNameById($ad->region) }}</td>
                      <td>{{ CitiesFacade::getCityNameById($ad->city, $ad->region) }}</td>
                      <td>{{ Skill::getSkillNameById($ad->skill_id) }}</td>
                      @if (!is_null($ad->band_name))
                        <td>{{$ad->band_name}}</td>
                      @else
                        <td>-</td>
                      @endif
                        <td>{{ $ad->type }}</td>
                        <td> {{$ad->status }} </td>
                      <td>
                        <x-button-link href="{{ route('user.ads.show', $ad->id) }}">
                          {{ __('Перейти к объявлению')}}
                        </x-button-link>
                      </td>
                    </tr>
                    @endforeach
                </x-table.tbody>
        </x-table.table>
    </div>
</div>
@endsection