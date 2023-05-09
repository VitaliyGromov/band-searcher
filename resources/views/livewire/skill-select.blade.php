<div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">{{__('Ваш навык')}}</label>
    <select wire:model="skills" name="skill" class="form-control">
        <option value="" selected>{{__('Выберите ваш навык')}}</option>
        @foreach ($skills as $skill)
            <option value="{{$skill->id}}">{{$skill->name}}</option>
        @endforeach
    </select>
</div>
