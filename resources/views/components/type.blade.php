<select class="form-control" name="type">
    <option value="" selected>{{__('Укажите тип')}}</option>
    <option value="0" @if (request('type') == 0) selected @endif>{{__('От групп')}}</option>
    <option value="1" @if (request('type') == 1) selected @endif>{{__('От артистов')}}</option>
</select>