@props(['selectedGenre' => ''])

<select class="form-select" name="genre_id">
  <option value="" selected>{{__('Жанр музыки')}}</option>
  @foreach ($genres as $genre)
      <option value="{{$genre->id}}" @if ($selectedGenre == $genre->id) selected @endif>
        {{$genre->name}}
      </option>
  @endforeach
</select>