@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
      <x-filters.users/>
      @if (sizeof($users) === 0)
          <div class="text-center">
            <h1>{{__('Пользователи не найдены')}}</h1>
          </div>
      @else
        <x-table.table>
          <x-table.thead>
              <th scope="col">{{ __('id') }}</th>
              <th scope="col">{{ __('Имя') }}</th>
              <th scope="col">{{ __('Фамилия') }}</th>
              <th scope="col">{{ __('email') }}</th>
              <th scope="col"></th>
            </x-table.thead>
            <x-table.tbody>
              @foreach ($users as $user)
              <tr>
                <th scope="row">{{ $user->id}}</th>
                <td>{{$user->name}}</td>
                <td>{{ $user->last_name }}</td>
                <td>{{ $user->email }}</td>
              </tr>
              @endforeach
          </x-table.tbody>
        </x-table.table>
      @endif
    </div>
</div>
@endsection