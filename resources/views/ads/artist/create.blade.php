@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ad from artist</h1>
        </div>
        <form>
          <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('Регион')}}</label>
              <select name="region" class="form-control">
                <option value="" selected>{{__('Выберите регион')}}</option>
                @foreach ($regions as $region)
                  <option value="{{$region->id}}">{{$region->name}}</option>
                @endforeach
              </select>
            </div>
            <div class="mb-3 d-none">
              <label for="exampleInputEmail1" class="form-label">{{__('Город')}}</label>
              <select name="city" class="form-control">
                <option value="1">One</option>
                <option value="2">Two</option>
                <option value="3">Three</option>
              </select>
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">{{__('Что вы умеете?')}}</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="skill">
            </div>
            <div class="md-3">
                <label for="skill" class="form-label">{{__('Ваш опыт')}}</label>
                <x-experience-list/>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection