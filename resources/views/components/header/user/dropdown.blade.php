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