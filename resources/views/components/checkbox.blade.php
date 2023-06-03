@props(['value' => '', 'boolValue' => false])


<input class="form-check-input" {{$attributes->merge([
    'name' => 'value'
])}} type="checkbox" value="1" @if ($boolValue) checked @endif>
