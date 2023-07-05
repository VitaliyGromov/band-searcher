<div>
    <select wire:model="selectedSkillId" name="skill_id" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($skills as $skill)
            <option value="{{ $skill->id }}" @if ($skill->id == $selectedSkillId)
                selected
            @endif>{{$skill->name}}</option>
        @endforeach
    </select>
</div>
