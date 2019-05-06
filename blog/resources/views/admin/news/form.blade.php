<div class="form-group">
    {!! Form::label('title', 'Title New')  !!}
    {!! Form::text('title',null,['class'=>'form-control']) !!}
</div>

<div class="form-group">
    {!! Form::label('description', 'New description')  !!}
    {!! Form::textarea('description',null,['class'=>'form-control'] ,['rows'=>'10'])!!}
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
<img id="holder" style="margin-top:15px;max-height:100px; "src = "{{$news->imgPath}} ">

{!! Form::submit('Save',['class'=>'btn btn-primary'])!!}
