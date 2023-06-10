@php

use App\Helpers\AdFieldsHendler;
use App\Models\Genre;

$adFieldsHendler = new AdFieldsHendler($ad);

$title = $ad->type ? 'себе' : 'группе';

@endphp

@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="mb-3">
            <x-ads.section-title>
                {{ __('Описание') }}
            </x-ads.section-title>
        </div>

        <x-ads.description :ad="$ad"/>

        <div class="m-3">

            <x-ads.section-title>
                {{ __('Требования к соискателю')}}
            </x-ads.section-title>

            @if (!$ad->type)
                <x-ads.skill :ad="$ad"/>
            @endif

           <x-ads.genre :ad="$ad"/>

            <x-ads.experiences :ad="$ad"/>

            @if ($ad->type)
                <x-ads.band.fields :ad="$ad"/>
            @else
                <x-ads.artist.fields :ad="$ad"/>
            @endif

            <x-ads.section-title>
                {{ __("О $title") }}
            </x-ads.section-title>

            @if ($ad->type)
                <x-ads.skill :ad="$ad"/>
            @endif

            <x-ads.genre :ad="$ad"/>

            <x-ads.experiences :ad="$ad"/>

            @if ($ad->type)
                <x-ads.artist.fields :ad="$ad"/>
            @else
                <x-ads.band.fields :ad="$ad"/>
            @endif

            <x-ads.links :ad="$ad"/>

            <x-ads.geo :ad="$ad"/>

            <x-ads.section-title>
                {{ __('Контактная информация') }}
            </x-ads.section-title>

            <x-ads.contacts :ad="$ad"/>

            @if (Route::is('admin.ads.show'))
                <x-modal id="ad_edit" modalName="Редактировать" title="{{ __('Редактровать объявление') }}">
                    <x-form.form :ad="$ad" :title="$title"/>
                </x-modal>
            @endif
            @if (Route::is('user.ads.show'))
                <x-modal id="ad_edit" modalName="Редактировать" title="{{ __('Редактровать объявление') }}">
                    <x-form.form :ad="$ad" :title="$title"/>
                </x-modal>
            @endif
        </div>
    </div>
</div>
@endsection