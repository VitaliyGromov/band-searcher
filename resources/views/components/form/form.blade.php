<form action="{{ route('ads.update', $ad->id) }}" method="POST">
    @csrf
    @method('PUT')

    <x-ads.section-title class="text-center">
        {{ __('Требования к соискателю')}}
    </x-ads.section-title>

    @if (!$ad->type)
        <x-ads.list-element name="{{ __('Навык') }}">
            <x-skills skill_id="{{$ad->skill_id}}"/>
        </x-ads.list-element> 
    @endif 

    <x-ads.list-element name="{{ __('Жанр') }}">
        <x-genres selectedGenre="{{$ad->genre_id}}"/>
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Опыт') }}">
        <x-experience name="applicant_experience" selectedExperienceId="{{$ad->applicant_experience}}"/>
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Концертный опыт') }}">
        <x-experience name="applicant_concert_experience" selectedExperienceId="{{$ad->applicant_concert_experience}}"/>
    </x-ads.list-element>

    @if ($ad->type)
        <x-form.band-checkboxes :ad="$ad"/>

        @if ($ad->commercial_project)
            <x-ads.list-element name="{{ __('Зарплата: ') }}">
                <input type="text" name="salary" class="form-control" value="{{$ad->salary}}">
            </x-ads.list-element>
        @endif
    @else
        <x-form.artist-checkboxes :ad="$ad"/>
    @endif

    <x-ads.section-title class="text-center">
        {{ __("О $title") }}
    </x-ads.section-title>

    @if (!$ad->type)
        <x-ads.list-element name="{{ __('Название группы') }}">
            <input type="text" class="form-control" value="{{$ad->band_name}}"/>
        </x-ads.list-element>
    @endif

    @if ($ad->type)
        <x-ads.list-element name="{{ __('Навык') }}">
            <x-skills skill_id="{{$ad->skill_id}}"/>
        </x-ads.list-element> 
    @endif 

    <x-ads.list-element name="{{ __('Опыт') }}">
        <x-experience name="own_experience" selectedExperienceId="{{$ad->own_experience}}"/>
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Концертный опыт') }}">
        <x-experience name="own_concert_experience" selectedExperienceId="{{$ad->own_concert_experience}}"/>
    </x-ads.list-element>

    @if ($ad->type)
        <x-form.artist-checkboxes :ad="$ad"/>
    @else
        <x-form.band-checkboxes :ad="$ad"/>

        @if ($ad->commercial_project)
            <x-ads.list-element name="{{ __('Зарплата: ') }}">
                <input type="text" name="salary" class="form-control" value="{{$ad->salary}}">
            </x-ads.list-element>
        @endif

    @endif

    <x-ads.list-element name="{{ __('Ссылка на VK') }}">
        <input type="text" name="vk" class="form-control" value="{{$ad->vk}}">
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Ссылка на YouTube') }}">
        <input type="text" name="youtube" class="form-control" value="{{$ad->youtube}}">
    </x-ads.list-element>

    <x-ads.section-title class="text-center">
        {{ __('Контактная информация') }}
    </x-ads.section-title>

    <x-ads.list-element name="{{ __('Имя') }}">
        <input type="text" name="name" class="form-control" value="{{$ad->name}}">
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Фамилия') }}">
        <input type="text" name="last_name" class="form-control" value="{{$ad->last_name}}">
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('email') }}">
        <input type="text" name="email" class="form-control" value="{{$ad->email}}">
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('Телефон') }}">
        <input type="text" name="phone" class="form-control" value="{{$ad->phone}}">
    </x-ads.list-element>

    <x-ads.list-element name="{{ __('География') }}">
        @livewire('region-city', ['selectedRussianRegion' => $ad->region_id, 'selectedCityByRegion' => $ad->city_id])
    </x-ads.list-element>

    <x-ads.section-title class="text-center">
        {{ __('Описание') }}
    </x-ads.section-title>

    <div class="text-center">
        <x-textarea name="description">
            {{$ad->description}}
        </x-textarea>
    </div>

    <input type="hidden" name="type" value="{{ intval($ad->type) }}">
    
    <div class="mt-3">
        <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
    </div>
</form>
