@props(['selectedStatus' => ''])

<select class="form-select" name="status_id">
  <option value="" selected></option>
  @foreach ($statuses as $status)
      <option value="{{$status->id}}" @if ($selectedStatus == $status->id) selected @endif>
        {{$status->name}}
      </option>
  @endforeach
</select>