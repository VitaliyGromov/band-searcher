<div>
    <select wire:model="selectedType" name="type" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($types as $type)
            <option value="{{ $type }}" @if ($type == $selectedType)
                selected
            @endif>{{$type}}</option>
        @endforeach
    </select>
</div>
