@props(['routeName' => ''])

<form action="" method="GET">
    <div class="mb-3">
        <div class="row">
            <div class="col-sm">
                <x-label for="type">{{__('Тип объявлений')}}</x-label>
                @livewire('types', ['selectedType' => request('type')])
            </div>
            @if (!Route::is('ads'))
            <div class="col-sm">
                <x-label for="type">{{__('Статус')}}</x-label>
                @livewire('statuses', ['selectedStatus' => request('status')])
            </div>
            @endif
        </div>
        <div class="row">
            <div class="col-sm">
                @livewire('region-city', ['selectedRussianRegion' => request('region_id'), 'selectedCityByRegion' => request('city_id')])
            </div>
            <div class="col-sm mt-3">
                <label for="band_name">{{__('Название группы')}}</label>
                <input class="form-control" name="band_name" value="{{request('band_name')}}" type="text"/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <x-label for="genre_id">{{__('Жанр')}}</x-label>
                @livewire('genres', ['selectedGenreId' => request('genre_id')])
            </div>
            <div class="col-sm">
                <x-label for="skill_id">{{__('Навык')}}</x-label>
                @livewire('skills', ['selectedSkillId' => request('skill_id')])
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="mt-3">
                    <x-label for="applicant_concert_experience">{{__('Концернтый опыт соискателя')}}</x-label>
                    @livewire('experiences', ['experienceName' => 'applicant_concert_experience', 'selectedExperience'=> request('applicant_concert_experience')])
                </div>
            </div>
            <div class="col-sm">
                <div class="mt-3">
                    <x-label for="applicant_experience">{{__('Опыт соискателя')}}</x-label>
                    @livewire('experiences', ['experienceName' => 'applicant_experience', 'selectedExperience'=> request('applicant_experience')])
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <x-band-checkboxes/>
                <div class="mt-3 d-none" id="salary">
                    <x-label for="salary">{{__('Сколько деняк?)')}}</x-label>
                    <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях" value="{{request('salary')}}"/>
                </div>
            </div>
            <div class="col-sm">
                <x-musician-checkboxes/>
            </div>
        </div>
        <div class="m-3">
            <button class="btn btn-primary" type="submit">{{__('Найти')}}</button>
        </div>
    </div>
</form>
