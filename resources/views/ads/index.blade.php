@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            <x-filters.ads/>
            @if (sizeof($ads) == 0)
                <div class="text-center">
                    <h3>{{__('Пока нет объявлений')}}</h3>
                </div>
            @else
                <div class="col">
                    @foreach ($ads as $ad)
                        <div class="mt-3">
                            <x-card.card :ad="$ad"/>
                        </div>
                    @endforeach
                </div>
            @endif
        </div>
    </div>
</div>
@endsection
