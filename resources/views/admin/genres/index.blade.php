@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <x-search-input-form formAction="{{ route('admin.genres') }}" inputName="name" inputPlaceholder="Введите название жанра"/>
        <x-table.table>
            <x-table.thead>
                <th scope="col">{{ __('id') }}</th>
                <th scope="col">{{ __('Название Жанра') }}</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </x-table.thead>
                <x-table.tbody>
                    @foreach ($genres as $genre)
                    <tr>
                      <th scope="row">{{ $genre->id}}</th>
                      <td>{{ $genre->name }}</td>
                      <td>
                        <x-button-link href="/">
                          {{ __('Редактировать')}}
                        </x-button-link>
                      </td>
                      <td>
                        <form action="{{ route('admin.genres.delete', $genre->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">
                              {{__('Удалить')}}
                            </button>
                        </form>
                      </td>
                    </tr>
                    @endforeach
                </x-table.tbody>
        </x-table.table>
    </div>
</div>
@endsection