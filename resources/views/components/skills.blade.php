<label for="skill_id" class="form-check-label">{{__('Навык')}}</label>
<select name="skill_id" class="form-control">
    <option value="" selected>{{__('Выберите навык')}}</option>
    @foreach ($skills as $skill)
        <option value="{{$skill->id}}">{{$skill->name}}</option>
    @endforeach
</select>
<x-error name="skill_id"/>