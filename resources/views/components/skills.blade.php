@props(['skill_id' => ''])

<select name="skill_id" class="form-control">
    <option value="" selected>{{__('Выберите навык')}}</option>
    @foreach ($skills as $skill)
        <option value="{{$skill->id}}" @if ($skill_id == $skill->id) selected @endif>
            {{$skill->name}}
        </option>
    @endforeach
</select>
<x-error name="skill_id"/>