@props(['formAction'=> '', 'inputName'=> '', 'inputPlaceholder'=> ''])

<div>
    <form action="{{$formAction}}">
        <div class="input-group mb-3">
            <x-input inputPlaceholder="{{$inputPlaceholder}}" inputName="{{$inputName}}" inputValue="{{request('name')}}"/>
            <div class="input-group-append ms-3">
              <x-button buttonColor="secondary" buttonType="submit">{{__('Найти')}}</x-button>
            </div>
        </div>
    </form>
</div>