<div>
    <select wire:model="selectedGenreId" name="genre_id" class="form-control">
        <option value="">{{__('- Выбрать -')}}</option>
        @foreach ($genres as $genre)
            <option value="{{ $genre->id }}" @if ($genre->id == $selectedGenreId)
                selected
            @endif>{{$genre->name}}</option>
        @endforeach
    </select>
</div>
