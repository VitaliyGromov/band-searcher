@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              <form class="row g-3 mt-2" action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col">
                    <input type="text" class="form-control" placeholder="{{__('Имя')}}" aria-label="name" name="name" value="{{Auth::user()->name}}">
                  </div>
                  <div class="col">
                    <input type="text" class="form-control" placeholder="{{__('Фамилия')}}" aria-label="last_name" name="last_name" value="{{Auth::user()->last_name}}">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="inputEmail4" class="form-label">{{__('Email')}}</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                </div>
                <div class="col-md-6">
                    <label for="inputEmail4" class="form-label">{{__('Телефон')}}</label>
                    <input type="number" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}">
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    {{__('Сохранить')}}
                  </button>
                </div>
              </form>
        </div>
    </div>
</div>
@endsection