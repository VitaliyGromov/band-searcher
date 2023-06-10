@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @if (sizeof($ads) == 0)
                <div class="text-center">
                    <h3>{{__('Пока нет объявлений')}}</h3>
                </div>
            @else
                @foreach ($ads as $ad)
                    <div class="col-12 col-md-4">
                        <x-ads.card :ad="$ad"/>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
</div>
@endsection
