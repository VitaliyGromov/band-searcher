<div>
    <select wire:model="selectedStatus" name="status" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($statuses as $status)
            <option value="{{ $status }}" @if ($status == $selectedStatus)
                selected
            @endif>{{$status}}</option>
        @endforeach
    </select>
</div>
