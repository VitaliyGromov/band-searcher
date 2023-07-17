<div class="btn-group">
    <button type="button" class="btn btn-secondary m-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
        {{__('Админка')}}
    </button>
    <ul class="dropdown-menu">
        <li><a class="dropdown-item" href="{{ route('admin.ads') }}">{{__('Объявления')}}</a></li>
        <li><a class="dropdown-item" href="{{ route('admin.users') }}">{{__('Пользователи')}}</a></li>
        <li><a class="dropdown-item" href="{{ route('admin.genres') }}">{{__('Жанры')}}</a></li>
        <li><a class="dropdown-item" href="{{ route('admin.skills') }}">{{__('Навыки')}}</a></li>
    </ul>
</div>