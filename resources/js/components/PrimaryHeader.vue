<template>
    <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <div class="m-2">
            <button>Ads</button>
        </div>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto">
                    <div class="btn-group">
                        <button type="button" class="btn btn-secondary m-2 dropdown-toggle" data-bs-toggle="dropdown" aria-expanded="false">
                            Создать
                        </button>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="">Объявление от артиста</a></li>
                            <li><a class="dropdown-item" href="">Объявление от групп</a></li>
                        </ul>
                    </div>
            </ul>

            <ul class="navbar-nav ms-auto">
                
            </ul>
        </div>
    </div>
</nav>
</template>