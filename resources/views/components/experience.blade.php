@props(['value' => ''])

<label class="form-check-label" {{$attributes->merge([
  'for' => 'value'
]) }}>
  {{ $slot }}
</label>
<select class="form-select" {{$attributes->merge([
    'name' => 'value',
])}}>
  <option value="" selected>{{__('Выберите опыт')}}</option>
  @foreach ($experience as $experienceItem)
      <option value="{{$experienceItem->id}}">{{$experienceItem->name}}</option>
  @endforeach
</select>
