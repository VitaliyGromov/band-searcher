@props(['link' => '#', 'color' => 'primary'])
<a class="btn btn-{{$color}}" {{$attributes->merge(['href'=>'link'])}} role="button">{{ $slot }}</a>