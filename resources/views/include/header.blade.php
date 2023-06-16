<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <x-button-link href="{{ route('ads') }}" color="light">
            {{__('Объявления')}}
        </x-button-link>

        @auth
            @role('admin')
                <x-button-link href="{{ route('admin.index') }}" color="light">
                    {{ __('Админка') }}
                </x-button-link>
            @endrole
        @endauth
       
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                @auth
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary m-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            {{__('Создать')}}
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="{{ route('ads.artist.create') }}">{{__('Объявление от артиста')}}</a></li>
                            <li><a class="dropdown-item" href="{{ route('ads.band.create') }}">{{__('Объявление от групп')}}</a></li>
                        </ul>
                    </div>
                @endauth
            </ul>

            <ul class="navbar-nav ms-auto">
                @guest
                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Вход') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Регистрация') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }} {{Auth::user()->last_name}}
                        </a>
                        
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">

                            <a class="dropdown-item" href="{{ route('profile') }}">
                                {{ __('Мой профиль') }}
                            </a>

                            <a class="dropdown-item" href="{{ route('user.ads') }}">
                                {{ __('Мои объявления') }}
                            </a>
                            <form action="{{ route('logout') }}" method="POST">
                                <button class="dropdown-item" type="submit">
                                    {{ __('Выход') }}
                                </button>
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>