@extends('adminlte::page')
@section('title', 'News')

@section('content_header')
    <h1>Edit New</h1>
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
    {!! Form::model($news, ['url'=>'/admin/news'])!!}
    @include('admin.news.form')
    {!! Form::close() !!}
@stop
