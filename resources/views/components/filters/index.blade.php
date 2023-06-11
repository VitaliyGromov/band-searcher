@props(['routeName' => ''])

<form action="" method="GET">
    <div class="mb-3">
        <x-label for="type">{{__('Тип объявлений')}}</x-label>
        <select class="form-control" name="type">
            <option value="">{{__('Укажите тип')}}</option>
            <option value="0">{{__('От групп')}}</option>
            <option value="1">{{__('От артистов')}}</option>
        </select>
        @livewire('region-city', ['selectedRussianRegion' => request('region_id'), 'selectedCityByRegion' => request('city_id')])
        <div class="row">
            <div class="col-sm">
                <x-label for="genre_id">{{__('Жанр')}}</x-label>
                <x-genres/>
            </div>
            <div class="col-sm">
                <x-label for="skill_id">{{__('Навык')}}</x-label>
                <x-skills/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <div class="mt-3">
                    <x-label for="applicant_concert_experience">{{__('Концернтый опыт соискателя')}}</x-label>
                    <x-experience name="applicant_concert_experience" selectedExperienceId="{{ request('applicant_concert_experience') }}"/>
                </div>
            </div>
            <div class="col-sm">
                <div class="mt-3">
                    <x-label for="applicant_experience">{{__('Опыт соискателя')}}</x-label>
                    <x-experience name="applicant_experience" selectedExperienceId="{{ request('applicant_experience') }}"/>
                  </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm">
                <x-band-checkboxes/>
                <div class="mt-3 d-none" id="salary">
                    <x-label for="salary">{{__('Сколько деняк?)')}}</x-label>
                    <input type="number" name="salary" class="form-control" placeholder="Введите сумму в рублях"/>
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
