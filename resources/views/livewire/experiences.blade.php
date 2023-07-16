@props(['selectedExperience' => ''])

<div>
    <select wire:model="selectedExperience" name="{{$experienceName}}" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($experiences as $item)
            <option value="{{ $item }}" @if ($item == $selectedExperience)
                selected
            @endif>{{$item}}</option>
        @endforeach
    </select>
</div>