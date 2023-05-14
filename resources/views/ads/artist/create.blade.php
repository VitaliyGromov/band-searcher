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
          <div class="mt-3">
            <h2>{{__('Требования к группе')}}</h2>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="genres">{{__('Жанр')}}</label>
            <x-genres/>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_experience">{{__('Опыт группы')}}</x-select>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_concert_experience">{{__('Концертный опыт группы')}}</x-select>
          </div>
          <div class="mt-3">
            <h3>{{__('Дополнительная информация')}}</h3>
          </div>
          <div class="mt-3">
            <x-checkbox name="own_music">{{(__('Свой материал'))}}</x-checkbox>
          </div>
          <div class="mt-3">
            <x-checkbox name="cower_band">{{(__('Кавер-группа'))}}</x-checkbox>
          </div>
          <div class="mt-3">
            <x-checkbox name="commercial_project" id="commercial_project">{{(__('Коммерческий проект'))}}</x-checkbox>
          </div>
          <div class="mt-3 d-none" id="salary">
            <label class="form-check-label" for="salary">{{__('Сколько хотите деняк?)')}}</label>
            <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях"/>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="additional_info">{{__('Если у вас есть пожелания, укажите их')}}</label>
            <x-textarea name="additional_info"></x-textarea>
          </div>
          <div class="mt-3">
            <h2>{{__('Ссылки')}}</h2>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="vk">{{__('Ссылка на ВК')}}</label>
            <input type="text" class="form-control" name="vk" placeholder="Ссылка на vk"/>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="youtube">{{__('Ссылка на YouTube')}}</label>
            <input type="text" class="form-control" name="youtube" placeholder="Ссылка на YouTube"/>
          </div>
          <div class="mt-3">
            <h2>{{__('Контактныя информация')}}</h2>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="name">{{__('Имя')}}</label>
            <input type="text" class="form-control" name="name" value="{{Auth::user()->name}}" placeholder="Введите ваше имя"/>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="last_name">{{__('Фамилия')}}</label>
            <input type="text" class="form-control" name="last_name" value="{{Auth::user()->last_name}}" placeholder="Введите вашу фамилию"/>
          </div>
          <div class="row">
            <div class="col mt-3">
              <label for="inputEmail4" class="form-check-label">{{__('Email')}}</label>
              <input type="email" class="form-control" id="email" name="email" value="{{Auth::user()->email}}">
            </div>
            <div class="col mt-3">
                <label for="inputEmail4" class="form-check-label">{{__('Телефон')}}</label>
                <input type="number" class="form-control" id="phone" name="phone" value="{{Auth::user()->phone}}">
            </div>
          </div>
          <button type="submit" class="btn btn-primary mt-3">{{__('Создать')}}</button>
        </form>
    </div>
</div>
<script>
  document.getElementById('commercial_project').addEventListener('change', showSalary);

  function showSalary(){
      document.getElementById('salary').classList.toggle('d-none');
  }
</script>
@endsection
