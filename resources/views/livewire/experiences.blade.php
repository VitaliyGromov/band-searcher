@props(['selectedExperience' => ''])

<div class="mt-3">
    <select name="{{$experienceName}}" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($experiences as $item)
            <option value="{{ $item }}">{{$item}}</option>
        @endforeach
    </select>
</div>
