@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-filters.index/>
        @if (sizeof($ads) == 0)
            <div class="text-center">
                <h3>{{__('Вы пока не создали ни одного объявления')}}</h3>
            </div>
        @else
            <x-table :ads="$ads" routeForButton="user.ads.show"/>
        @endif
    </div>
</div>
@endsection