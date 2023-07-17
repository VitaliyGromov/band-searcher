@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-table.table>
            <x-table.thead>
                <th scope="col">{{ __('id') }}</th>
                <th scope="col">{{ __('Название Жанра') }}</th>
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
                    </tr>
                    @endforeach
                </x-table.tbody>
        </x-table.table>
    </div>
</div>
@endsection