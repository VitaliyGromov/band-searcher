<select class="form-select" name="genre_id">
  <option value="" selected>{{__('Жанр музыки')}}</option>
  @foreach ($genres as $genre)
      <option value="{{$genre->id}}">{{$genre->name}}</option>
  @endforeach
</select>