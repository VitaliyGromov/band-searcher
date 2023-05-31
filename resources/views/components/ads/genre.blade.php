@php
    use App\Models\Genre;
@endphp

<x-ads.list-element name="{{ __('Жанр')}}">
    {{ Genre::getGenreNameById($ad->genre_id) }}
</x-ads.list-element>