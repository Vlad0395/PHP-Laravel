<div class="form-group">
    {!! Form::label('title', 'Title New')  !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

{{--<div class="form-group">--}}
{{--    {!! Form::label('category_id', 'Category') !!}--}}
{{--    {!! Form::select('category_id', $categories, null, ['class'=>'form-control', 'multiple'=>true]) !!}--}}
{{--</div>--}}
<div class="form-group">
    <select name="category_id" id="category_id" class="form-control">
        @foreach($categories as $category)

        <option value="{{$category->id}}" >{{$category->name}}</option>

        @endforeach
    </select>
</div>
<div class="form-group">
    {!! Form::label('description', 'Description')  !!}
    {!! Form::text('description',null,['class'=>'form-control'] ,['rows'=>'10'])!!}
</div><div class="form-group">

    {!! Form::label('text', 'Text news')  !!}
    {!! Form::textarea('text',null,['class'=>'form-control'])!!}
</div>

<div class="input-group">
   <span class="input-group-btn">
     <a id="lfm" data-input="thumbnail" data-preview="holder" class="btn btn-primary">
       <i class="fa fa-picture-o"></i> Choose
     </a>
   </span>
{{--    {{dd($news->imgPath)}}--}}
    <input id="thumbnail" class="form-control" type="text" name="filepath" value="{{$news->imgPath}}">

</div>
<img id="holder" style="margin-top:15px;max-height:100px; "src = "{{$news->imgPath}} "><br>

{!! Form::submit('Save',['class'=>'btn btn-primary'])!!}
