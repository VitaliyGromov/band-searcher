<x-mail::message>
Добрый день, {{$user->name}} {{$user->last_name}}!<br/>
Статус вашего объявления, созданного {{$ad->created_at}} был изменен на {{ $status }}.

@if (!empty($message))
    {{$message}}
@endif

<x-mail::button :url="route('user.ads.show', $ad->id)">
{{__('Перейти к объявлению')}}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
