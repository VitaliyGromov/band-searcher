@props(['name' => $name])

<div class="m-3 row">
    <div class="col">
        <h4>{{ $name }}</h4>
    </div>
    <div class="col">
        <p>{{ $slot }}</p>
    </div>
</div>