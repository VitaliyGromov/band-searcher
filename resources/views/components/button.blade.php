@props(['buttonType' => 'text', 'buttonColor' => 'primary'])


<button type="{{$buttonType}}" class="btn btn-{{$buttonColor}}">
    {{$slot}}
</button>