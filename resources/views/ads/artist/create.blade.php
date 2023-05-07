@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ad from artist</h1>
        </div>
        <form>
          @livewire('region-city-component')
          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">{{__('Что вы умеете?')}}</label>
            <input type="text" class="form-control" id="exampleInputPassword1" name="skill">
          </div>
          <div class="md-3">
              <label for="skill" class="form-label">{{__('Ваш опыт')}}</label>
              <x-experience-list/>
          </div>
          <button type="submit" class="btn btn-primary mt-3">{{__('Создать')}}</button>
        </form>
    </div>
</div>
@endsection