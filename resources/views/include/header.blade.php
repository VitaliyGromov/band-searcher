<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <div class="m-2">
            <x-button-link href="{{ route('ads') }}" color="light">
                {{__('Объявления')}}
            </x-button-link>
        </div>

        @auth
            @role('admin')
                <x-header.admin.dropdown/>
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
                    <x-header.login.buttons/>
                @else
                    <x-header.user.dropdown/>
                @endguest
            </ul>
        </div>
    </div>
</nav>