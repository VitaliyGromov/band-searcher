@php

$title = $ad->type ? 'группе' : 'себе';

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
                {{ __('Требования')}}
            </h2>
        </div>
    </div>
</div>
@endsection