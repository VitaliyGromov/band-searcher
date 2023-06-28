<x-mail::message>
    
Добрый день, {{$user->name}} {{$user->last_name}}!<br/>
Ваш пароль был успешно обновлен!

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>