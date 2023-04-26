@props(['link' => '#', 'color' => 'primary'])
<a class="btn btn-{{$color}} m-2" {{$attributes->merge(['href'=>'link'])}} role="button">
    {{ $slot }}
</a>