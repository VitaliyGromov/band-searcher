<div class="mt-3">

    <div class="mb-3">
        <label for="region" class="form-check-label">{{__('Регион')}}</label>
        <select wire:model="selectedRussianRegion" name="region" class="form-control">
          <option value="" selected>{{__('- Выберите регион -')}}</option>
          @foreach ($russianRegions as $region)
              <option value="{{ $region['id'] }}">{{ $region['name'] }}</option>
          @endforeach
        </select>
        <x-error name="region"/>
    </div>

    @if (!is_null($selectedRussianRegion))
        <div class="mb-3">
            <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('Город') }}</label>
            <select wire:model="selectedCityByRegion" name="city" class="form-control">
                <option value="">{{__('- Выберите город -')}}</option>
                @foreach($citesByRegion as $city)
                    <option value="{{ $city['id'] }}">{{ $city['name'] }}</option>
                @endforeach
            </select>
            <x-error name="city"/>
        </div>
    @endif
</div>
