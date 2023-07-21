@props(['formAction'=> '', 'inputName'=> '', 'inputPlaceholder'=> ''])

<div>
    <form action="{{$formAction}}">
        <div class="input-group mb-3">
            <input type="text" class="form-control me-3" placeholder="{{$inputPlaceholder}}" aria-describedby="basic-addon2" name="{{$inputName}}" value="{{request('name')}}">
            <div class="input-group-append">
              <button class="btn btn-secondary" type="submit">{{__('Найти')}}</button>
            </div>
          </div>
    </form>
</div>