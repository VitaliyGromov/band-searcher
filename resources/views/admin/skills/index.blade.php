@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <x-table.table>
            <x-table.thead>
                <th scope="col">{{ __('id') }}</th>
                <th scope="col">{{ __('Навык') }}</th>
                <th scope="col"></th>
              </x-table.thead>
                <x-table.tbody>
                    @foreach ($skills as $skill)
                    <tr>
                      <th scope="row">{{ $skill->id}}</th>
                      <td>{{ $skill->name }}</td>
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