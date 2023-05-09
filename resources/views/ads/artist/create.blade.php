@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ad from artist</h1>
        </div>
        <form>
          @livewire('region-city')
          @livewire('skill-select')
          <div class="md-3">
              <label for="skill" class="form-label">{{__('Ваш опыт')}}</label>
              <x-experience-list/>
          </div>
          <button type="submit" class="btn btn-primary mt-3">{{__('Создать')}}</button>
        </form>
    </div>
</div>
@endsection