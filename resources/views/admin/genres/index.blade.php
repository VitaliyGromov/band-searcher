@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <x-search-input-form formAction="{{ route('admin.genres') }}" inputName="name" inputPlaceholder="Введите название жанра"/>
        <div class="row">
          <div class="col-sm">
            <x-modal id="genre_edit" modalName="{{__('Создать')}}" title="{{ __('Создать') }}">
              <form action="{{route('admin.genres.store')}}" method="POST">
                  @csrf

                  <input type="text" name="name" class="form-control">
                  <x-error name="name"/>

                  <div class="mt-3">
                      <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
                  </div>
              </form>
            </x-modal>
          </div>
        </div>
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
                        <x-modal id="genre_edit_{{$genre->id}}" modalName="{{__('Редактировать')}}" title="{{ __('Редактировать') }}">
                          <form action="{{route('admin.genres.update', $genre->id)}}" method="POST">
                              @method('PUT')
                              @csrf

                              <input type="text" name="name" class="form-control" value="{{ $genre->name }}">
                              <x-error name="name"/>

                              <div class="mt-3">
                                  <button type="submit" class="btn btn-primary">{{__('Сохранить')}}</button>
                              </div>
                          </form>
                        </x-modal>
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