<x-mail::message>
Добрый день, {{$user->name}} {{$user->last_name}}, ваше объявление было успешно обновлено! <br/>
Скоро оно появится среди всех остальных.

<x-mail::button :url="route('user.ads.show', $adId)">
Перейти к объявлению
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
