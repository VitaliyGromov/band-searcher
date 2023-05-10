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
              <x-experience name="own_experience">{{__('Ваш опыт')}}</x-select>
          </div>
          <div class="mt-3">
            <x-experience name="own_concert_experience">{{__('Ваш концертный опыт')}}</x-select>
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
          <h2>{{__('Требования к группе')}}</h2>
          <div class="mt-3">
            <label class="form-check-label" for="genres">{{__('Жанр')}}</label>
            <x-genres/>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_experience">{{__('Концертный опыт группы')}}</x-select>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_concert_experience">{{__('Концертный опыт группы')}}</x-select>
          </div>
          <div class="mt-3">
            <h3>{{__('Дополнительная информация')}}</h3>
          </div>
          <button type="submit" class="btn btn-primary mt-3">{{__('Создать')}}</button>
        </form>
    </div>
</div>
@endsection