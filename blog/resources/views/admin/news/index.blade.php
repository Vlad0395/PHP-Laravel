@extends('adminlte::page')
@section('title', 'News')

@section('content_header')
    <h1>News</h1>
@stop

@section('content')

    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>#</th>
            <th>title</th>
            <th>description</th>
            <th>img</th>
            <th>author</th>
            <th>Action</th>
        </tr>
        </thead>
        @foreach ($news as $item)
            <tbody>
            <tr>
                <td>{{$loop->iteration}}</td>
                <td>
                    <a href="{{url('/admin/news/'.$item->id.'/edit')}}">{{$item->title}}</a>
                </td>
                <td>{{$item->description}}</td>
                <td>
                    <img src="{{$item->imgPath}}" alt="{{$item->imgPath}} "  class="img-responsive" style="width: 20%;">
                </td>
                <td>{{$item->user->name}}</td>
                <td>
                    <a href="#" data-id="{{ $item->id }}" class="delete">delete</a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>

@stop
@section('js')
    <script>
        $(document).ready( function(){
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#myTable').on('click', '.delete', function(e){
                e.preventDefault();
                let id = $(this).attr('data-id');
                let elem = $(this);
                console.log(elem,'elem')
                $.ajax({
                    url:'news/'+id,
                    type:'DELETE',
                    success: function(){
                        elem.parents('tr').remove()
                    }
                });
            });
        });
    </script>
@stop
