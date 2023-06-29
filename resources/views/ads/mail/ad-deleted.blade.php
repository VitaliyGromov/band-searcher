<x-mail::message>
Добрый день, {{$user->name}} {{$user->last_name}}!<br/>
Ваше объявление, созданное {{$ad->created_at}} было успешно удалено, надеемся, вы нашли, кого искали.

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>