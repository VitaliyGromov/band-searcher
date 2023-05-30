@php

use App\Helpers\AdFieldsHendler;
use App\Models\Genre;
use App\Models\Experience;
use App\Models\Region;
use App\Models\City;
use App\Models\Skill;

$adFieldsHendler = new AdFieldsHendler($ad);

$title = $ad->type ? 'себе' : 'группе';

@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mb-3">
            <h2>
                {{ __('Описание') }}
            </h2>
        </div>
        <div class="p-3 mb-2 text-dark border rounded">
            <p>{{$ad->description}}</p>
        </div>
        <div class="m-3">
            <h2>
                {{ __('Требования к соискателю')}}
            </h2>
            <x-ads.list-element name="{{ __('Навык') }}">
                {{ Skill::getSkillNameById($ad->skill_id) }}
            </x-ads.list-element>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Навык')}}</h4>
                </div>
                <div class="col">
                    <p>{{ Skill::getSkillNameById($ad->skill_id) }}</p>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Жанр')}}</h4>
                </div>
                <div class="col">
                    <p>{{ Genre::getGenreNameById($ad->genre_id) }}</p>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Опыт') }}</h4>
                </div>
                <div class="col">
                    {{ Experience::getExperienceNameById($ad->applicant_experience) }}
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Концертный опыт') }}</h4>
                </div>
                <div class="col">
                    {{ Experience::getExperienceNameById($ad->applicant_concert_experience) }}
                </div>
            </div>
            <h2>
                {{ __("О $title") }}
            </h2>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Жанр')}}</h4>
                </div>
                <div class="col">
                    <p>{{ Genre::getGenreNameById($ad->genre_id) }}</p>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Опыт') }}</h4>
                </div>
                <div class="col">
                    {{ Experience::getExperienceNameById($ad->own_experience) }}
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Концертный опыт') }}</h4>
                </div>
                <div class="col">
                    {{ Experience::getExperienceNameById($ad->own_concert_experience) }}
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Сcылка на VK') }}</h4>
                </div>
                <div class="col">
                    <a href="{{$ad->vk}}" target="blank">{{ __('Перейти в VK') }}</a>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Сcылка на YouTube') }}</h4>
                </div>
                <div class="col">
                    <a href="{{$ad->youtube}}" target="blank">{{ __('Перейти к каналу') }}</a>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Регион') }}</h4>
                </div>
                <div class="col">
                    <p>{{ Region::getRegionNameById($ad->region_id) }}</p>
                </div>
            </div>
            <div class="m-3 row">
                <div class="col">
                    <h4>{{ __('Город') }}</h4>
                </div>
                <div class="col">
                    <p>{{ City::getCityNameById($ad->city_id) }}</p>
                </div>
            </div>
            <h2>
                {{ __('Контактная информация') }}
            </h2>
            <div class="m-3 row">
                <div class="col">
                    <p>{{ $ad->name }} {{$ad->last_name}} {{ __(' тел. ')}} {{$ad->phone}}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection