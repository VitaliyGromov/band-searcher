<label for="skill" class="form-label">{{__('Ваш навык')}}</label>
<select name="skill" class="form-control">
    <option value="" selected>{{__('Выберите ваш навык')}}</option>
    @foreach ($skills as $skill)
        <option value="{{$skill->id}}">{{$skill->name}}</option>
    @endforeach
</select>