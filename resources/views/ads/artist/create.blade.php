@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Ad from artist</h1>
        </div>
        <form>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">{{__('Населенный пункт')}}</label>
              <input type="text" class="form-control" id="city" name="city">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">{{__('Что вы умеете?')}}</label>
              <input type="text" class="form-control" id="exampleInputPassword1" name="skill">
            </div>
            <div class="md-3">
                <label for="skill" class="form-label">{{__('Ваш опыт')}}</label>
                <x-experience-list/>
            </div>
            <div class="mb-3 form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>
@endsection