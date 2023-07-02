<x-mail::message>
Добрый день, {{$user->name}} {{$user->last_name}}!<br/>
Ваше объявление было успешно создано, скоро администратор проверить его, и оно попадет к остальным

<x-mail::button :url="route('user.ads.show', $ad->id)">
{{__('Перейти к объявлению')}}
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
