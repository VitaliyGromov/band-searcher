@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('ads.store') }}" method="POST">
          @csrf
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
          <x-musician-checkboxes/>
          <div class="mt-3">
            <h2>{{__('Требования к группе')}}</h2>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="genres">{{__('Жанр')}}</label>
            <x-genres/>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_experience">{{__('Опыт')}}</x-select>
          </div>
          <div class="mt-3">
            <x-experience name="applicant_concert_experience">{{__('Концертный опыт')}}</x-select>
          </div>
          <div class="mt-3">
            <h3>{{__('Дополнительная информация')}}</h3>
          </div>
          <x-band-checkboxes/>
          <div class="mt-3 d-none" id="salary">
            <label class="form-check-label" for="salary">{{__('Сколько хотите деняк?)')}}</label>
            <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях"/>
          </div>
          <div class="mt-3">
            <label class="form-check-label" for="additional_info">{{__('Если у вас есть пожелания, укажите их')}}</label>
            <x-textarea name="additional_info"></x-textarea>
          </div>
          <x-links-fields/>
          <x-contact-fields/>
          <input type="hidden" name="type" value="1">
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
