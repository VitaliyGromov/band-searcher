@php
use App\Enums\Status;

$statuses = Status::getAllStatusesAsArray();

@endphp
@props(['selectedStatus' => ''])

<select class="form-select" name="status_id" id="status_id">
  <option value="" selected></option>
  @foreach ($statuses as $status)
      <option value="{{$status}}" @if ($selectedStatus == $status) selected @endif>
        {{$status}}
      </option>
  @endforeach
</select>