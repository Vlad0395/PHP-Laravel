@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Add Role</h1>
@stop

@section('content')
    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
        {!!Form::model($user, ['url'=>"/admin/user/{$user->id}", 'method' => "PUT"]) !!}
        <div class="form-group">
            {!! Form::label('name', 'User Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('email', 'Email') !!}
            {!! Form::email('email', null, ['class'=>'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('role', 'User roles') !!}
            {!! Form::select('role[]', $roles, null, ['class'=>'form-control', 'multiple'=>true]) !!}
        </div>

        {!! Form::submit('Save', ['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
@stop
@section('js')
    <script>
        $('select').select2();
    </script>
@stop

