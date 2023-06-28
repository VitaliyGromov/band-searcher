@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
              @if (session('message'))
                <div class="alert alert-success" role="alert">
                    {{ session('message') }}
                </div>
              @endif
              <h2>{{__('Информация о профиле')}}</h2>
              <form class="row g-3 mt-2" action="{{ route('profile.update', Auth::user()->id) }}" method="POST">
                @method('PUT')
                @csrf
                <div class="row">
                  <div class="col">
                    <label for="inputEmail4" class="form-check-label">{{__('Имя')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Имя')}}" aria-label="name" name="name" value="{{Auth::user()->name}}">
                    <x-error name="name"/>
                  </div>
                  <div class="col">
                    <label for="inputEmail4" class="form-check-label">{{__('Фамилия')}}</label>
                    <input type="text" class="form-control" placeholder="{{__('Фамилия')}}" aria-label="last_name" name="last_name" value="{{Auth::user()->last_name}}">
                    <x-error name="last_name"/>
                  </div>
                </div>
                <div class="row">
                  <div class="col mt-3">
                    <label for="inputEmail4" class="form-check-label">{{__('Email')}}</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
                    <x-error name="email"/>
                  </div>
                  <div class="col mt-3">
                      <label for="inputEmail4" class="form-check-label">{{__('Телефон')}}</label>
                      <input type="number" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}">
                      <x-error name="phone"/>
                  </div>
                </div>
                <div class="col-12">
                  <button type="submit" class="btn btn-primary">
                    {{__('Сохранить')}}
                  </button>
                </div>
              </form>
              <div class="mt-3">
                <x-button-link color="secondary" href="{{url('password/confirm')}}">
                  {{__('Сменить пароль')}}
                </x-button-link>
              </div>
        </div>
    </div>
</div>
@endsection