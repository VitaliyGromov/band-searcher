@props(['selectedStatus' => ''])

<select class="form-select" name="status_id">
  @foreach ($statuses as $status)
      <option value="{{$status->id}}" @if ($selectedStatus == $status->id) selected @endif>
        {{$status->name}}
      </option>
  @endforeach
</select>