@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('ads.store') }}" method="POST">
            @csrf
            <h2>{{__('Информация о вашей группе')}}</h2>
            <div class="mt-3">
              <x-label for="band_name">{{__('Название группы')}}</x-label>
              <input name="band_name" type="text" class="form-control"/>
              <x-error name="band_name"/>
            </div>
            @livewire('region-city')
            <div class="mt-3">
              <x-label for="own_experience">{{__('Ваш опыт')}}</x-label>
              <x-experience name="own_experience"/>
            </div>
            <div class="mt-3">
              <x-label for="own_concert_experience">{{__('Ваш опыт')}}</x-label>
              <x-experience name="own_concert_experience"/>
            </div>
            <div class="mt-3">
                <label class="form-check-label" for="genres">{{__('Жанр')}}</label>
                <x-genres/>
            </div>
            <div class="mt-3">
              <x-label for="description">{{__('Расскажите что-нибудь о вашей группе')}}</x-label>
              <x-textarea name="description"></x-textarea>
            </div>
            <x-band-checkboxes/>
            <div class="mt-3 d-none" id="salary">
              <x-label for="salary">{{__('Сколько дадите деняк?)')}}</x-label>
              <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях"/>
            </div>
            <div class="mt-3">
              <h2>{{__('Требования к соискателю')}}</h2>
            </div>
            <div class="mt-3">
              <x-skills/>
            </div>
            <div class="mt-3">
              <x-label for="applicant_experience">{{__('Опыт')}}</x-label>
              <x-experience name="applicant_experience"/>
            </div>
            <div class="mt-3">
              <x-label for="applicant_concert_experience">{{__('Концертный опыт')}}</x-label>
              <x-experience name="applicant_concert_experience"/>
            </div>
            <div class="mt-3">
              <h3>{{__('Дополнительная информация')}}</h3>
            </div>
            <x-musician-checkboxes/>
            <div class="mt-3">
              <x-label for="additional_info">{{__('Если у вас есть пожелания, укажите их')}}</x-label>
              <x-textarea name="additional_info"></x-textarea>
            </div>
            <x-links-fields/>
            <x-contact-fields/>
            <input type="hidden" name="type" value="0">
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