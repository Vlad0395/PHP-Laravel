@extends('adminlte::page')
@section('title', 'Category')

@section('content_header')
    <h1>Category</h1>
@stop

@section('content')
    <table class="table" id="myTable">
        <thead>
        <tr>
            <th>
                #
            </th>
            <th>
                name
            </th>
            <th>
                img
            </th>
            <th>
                Action
            </th>
        </tr>
        </thead>
        @foreach ($categories as $category)
            <tbody>
            <tr>
                <td>
                    {{$loop->iteration}}
                </td>
                <td>
                    <a href="{{url('/admin/category/'.$category->id.'/edit')}}">{{$category->name}}</a>
                </td>
                <td>
                    <img src="{{$category->imgPath}}" alt="{{$category->imgPath}}" class="img-responsive">
                </td>
                <td>
                    <a href="#" data-id = "{{$category->id}}" class ="delete"><i class="fas fa-trash-alt">DELETE</i></a>
                </td>
            </tr>
            @endforeach
            </tbody>
    </table>

@stop
@section('js')
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });
            $('#myTable').on('click', '.delete', function (e) {
                e.preventDefault();
                let id = $(this).attr('data-id');
                let elem = $(this);
                $.ajax({
                    url: '/admin/category/'+id,
                    type: 'delete',
                    success: function () {
                        elem.parents('tr ').remove();
                    }

                })
            })

        } );
    </script>
@stop

