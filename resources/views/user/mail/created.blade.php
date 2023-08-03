<x-mail::message>

Для входа используйте пароль и адрес и электронной почты. <br>
Пароль: {{$user->password}}

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>