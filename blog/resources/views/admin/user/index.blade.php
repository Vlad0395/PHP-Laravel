@extends('adminlte::page')
@section('title', 'Users')

@section('content_header')
    <h1>Users</h1>
@stop

@section('content')
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                id
            </th>
            <th>
                name
            </th>
            <th>
                email
            </th>
            <th>
                Role
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        @foreach ($users as $user)
            <tbody>
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    {{$user->id}}
                </td>
                <td>
                    {{$user->name}}
                </td>
                <td>
                    {{$user->email}}
                </td>
                <td>
                    {{$user->roles->pluck('name')->implode(', ')}}
                </td>
                <td>
                    <a href="{{url('/admin/user/'.$user->id.'/edit')}}">Добавить роль пользователю</a>
            </tr>
            @endforeach
            </tbody>
    </table>

@stop
