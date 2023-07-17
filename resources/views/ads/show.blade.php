@php

use App\Models\Genre;
use App\Models\Status;
use App\Enums\Status as EnumsStatus;
use App\Enums\Types;

$title = $ad->type ? 'себе' : 'группе';

if($ad->type == Types::fromBand->value){
    $title = 'группе';
} else {
    $title = 'себе';
}

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

            @if ($ad->type == Types::fromBand->value)
                <x-ads.skill :ad="$ad"/>
            @endif

           <x-ads.genre :ad="$ad"/>

            <x-ads.experiences :ad="$ad"/>

            @if ($ad->type == Types::fromBand->value)
                <x-ads.artist.fields :ad="$ad"/>
            @else
                <x-ads.band.fields :ad="$ad"/>
            @endif

            <x-ads.section-title>
                {{ __("О $title") }}
            </x-ads.section-title>

            @if ($ad->type == Types::fromArtist->value)
                <x-ads.skill :ad="$ad"/>
            @endif

            <x-ads.genre :ad="$ad"/>

            <x-ads.experiences :ad="$ad"/>

            @if ($ad->type == Types::fromArtist->value)
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
                <x-modal id="ad_edit" modalName="{{__('Изменить статус')}}" title="{{ __('Изменить статус') }}">
                    <form action="{{route('admin.ads.change.status', $ad->id)}}" method="POST">
                        @method('PUT')
                        @csrf

                        <x-ads.list-element name="{{ __('Статус') }}">
                            @livewire('statuses', ['selectedStatus' => $ad->status])
                        </x-ads.list-element>
                
                        <div id="message" class="d-none">
                            <x-label for="message">{{__('Пояснительная записка')}}</x-label>
                            <x-textarea name="message">
                            </x-textarea>
                        </div>
                        <div class="mt-3">
                            <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
                        </div>
                    </form>
                </x-modal>
                <div class="col-sm">
                    <form action="{{route('ads.destroy', $ad->id)}}" method="POST">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-danger" type="submit">{{__('Удалить')}}</button>
                    </form>
                </div>
            @endif
            @if (Route::is('user.ads.show'))
                <div class="row">
                    <div class="col-sm">
                        <x-modal id="ad_edit" modalName="Редактировать" title="{{ __('Редактровать объявление') }}">
                            <x-form.form :ad="$ad" :title="$title"/>
                        </x-modal>
                    </div>
                    @if ($ad->status == EnumsStatus::active->value)
                        <div class="col-sm">
                            <form action="{{route('user.ads.change.status', $ad->id)}}" method="POST">
                                @csrf
                                @method('PUT')
                                <input type="hidden" name="status" value="{{EnumsStatus::closed->value}}">
                                <button class="btn btn-danger" type="submit">{{__('Закрыть')}}</button>
                            </form>
                        </div>
                    @endif
                    @if ($ad->status == EnumsStatus::closed->value)
                        <div class="col-sm">
                            <x-modal id="ad_edit" modalName="Возобновить" title="{{ __('Возобновить объявление') }}">
                                <x-form.form :ad="$ad" :title="$title"/>
                            </x-modal>
                        </div>
                        <div class="col-sm">
                            <form action="{{route('ads.destroy', $ad->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">{{__('Удалить')}}</button>
                            </form>
                        </div>
                    @endif
                </div>
            @endif
        </div>
    </div>
</div>
@endsection