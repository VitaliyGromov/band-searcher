@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="row">
            @foreach ($ads as $ad)
                <div class="col-12 col-md-4">
                    <x-ads.card :ad="$ad"/>
                </div>
            @endforeach
        </div>
    </div>
</div>
@endsection
