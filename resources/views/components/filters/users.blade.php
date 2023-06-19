<form action="" method="GET">
    <div class="row">
        <div class="col-sm">
            <x-label for="id">{{__('ID')}}</x-label>
            <input type="text" class="form-control" name="id" value="{{ request('id') }}">
        </div>
        <div class="col-sm">
            <x-label for="name">{{__('Имя')}}</x-label>
            <input type="text" class="form-control" name="name" value="{{ request('name') }}">
        </div>
        <div class="col-sm">
            <x-label for="last_name">{{__('Фамилия')}}</x-label>
            <input type="text" class="form-control" name="last_name" value="{{ request('last_name') }}">
        </div>
        <div class="col-sm">
            <x-label for="email">{{__('Email')}}</x-label>
            <input type="text" class="form-control" name="email" value="{{ request('email') }}">
        </div>
    </div>
    <div class="m-3">
        <button class="btn btn-primary" type="submit">{{__('Найти')}}</button>
    </div>
</form>