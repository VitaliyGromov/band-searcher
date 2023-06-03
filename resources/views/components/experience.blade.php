@props(
  [
    'value' => '',
    'selectedExperienceId' => ''
  ]
)

<select class="form-select" {{$attributes->merge([
    'name' => 'value',
])}}>
  <option value="" selected>{{__('Выберите опыт')}}</option>
  @foreach ($experience as $experienceItem)
      <option value="{{$experienceItem->id}}" @if ($selectedExperienceId == $experienceItem->id) selected @endif>{{$experienceItem->name}}</option>
  @endforeach
</select>
