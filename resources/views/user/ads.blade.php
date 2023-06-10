@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-table :ads="$ads" routeForButton="user.ads.show"/>
    </div>
</div>
@endsection