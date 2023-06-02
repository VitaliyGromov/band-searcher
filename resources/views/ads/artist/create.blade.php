@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <form action="{{ route('ads.store') }}" method="POST">
          @csrf
          <h2>{{__('Информация о вас')}}</h2>
          @livewire('region-city')
          <div class="mt-3">
            <x-label for="skill_id">{{__('Ваш навык')}}</x-label>
            <x-skills/>
          </div>
          <div class="mt-3">
              <x-label for="own_experience">{{__('Ваш опыт')}}</x-label>
              <x-experience name="own_experience"/>
          </div>
          <div class="mt-3">
            <x-label for="own_concert_experience">{{__('Ваш концертный опыт')}}</x-label>
            <x-experience name="own_concert_experience"/>
          </div>
          <div class="mt-3">
            <x-label for="description">{{__('Расскажите что-нибудь о себе')}}</x-label>
            <x-textarea name="description"></x-textarea>
          </div>
          <x-musician-checkboxes/>
          <div class="mt-3">
            <h2>{{__('Требования к группе')}}</h2>
          </div>
          <div class="mt-3">
            <x-label for="genres">{{__('Жанр')}}</x-label>
            <x-genres/>
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
          <x-band-checkboxes/>
          <div class="mt-3 d-none" id="salary">
            <x-label for="salary">{{__('Сколько хотите деняк?)')}}</x-label>
            <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях"/>
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
