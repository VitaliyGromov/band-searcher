@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form>
          <h2>{{__('Информация о вас')}}</h2>
          @livewire('region-city')
          <div class="mt-3">
            <x-skills/>
          </div>
          <div class="mt-3">
              <label for="experience" class="form-label">{{__('Ваш опыт')}}</label>
              <x-experience-list name="experience"/>
          </div>
          <div class="mt-3">
            <label for="concert_experience" class="form-label">{{__('Ваш концертный опыт')}}</label>
            <x-experience-list name="concert_experience"/>
          </div>
          <div class="mt-3">
            <x-checkbox name="own_instrument">{{(__('Есть свой инструмент'))}}</x-checkbox>
          </div>
          <div class="mt-3">
            <x-checkbox name="ready_to_move">{{(__('Готов(а) к переезду'))}}</x-checkbox>
          </div>
          <div class="mt-3">
            <x-checkbox name="ready_to_tour">{{(__('Готов(а) ехать в тур'))}}</x-checkbox>
          </div>
          <hr>
          <button type="submit" class="btn btn-primary mt-3">{{__('Создать')}}</button>
        </form>
    </div>
</div>
@endsection