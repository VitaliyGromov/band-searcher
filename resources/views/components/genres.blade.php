<select class="form-select" name="genres">
  <option value="" selected>{{__('Жанр музыки')}}</option>
  @foreach ($genres as $genre)
      <option value="{{$genre->id}}">{{$genre->name}}</option>
  @endforeach
</select>