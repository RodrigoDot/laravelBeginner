{!!csrf_field()!!}
<!-- div.form-control^label.form-label.col-sm-2^div.col-sm-10>input.form-control -->
<div class="form-group">
  <label for="title" class="control-label col-sm-2">Title</label>
  <div class="col-sm-10">
    <input type="text" name="title" id="title" class="form-control" value="{{$page->title ?? ''}}" placeholder="title">
  </div>
</div>
<!-- div.form-group^label.control-label.col-sm-2^div.col-sm-10>input.form-control -->
<div class="form-group">
  <label for="url" class="control-label col-sm-2">Url</label>
  <div class="col-sm-10">
    <input type="text" name="url" id="url" class="form-control" value="{{$page->url ?? ''}}" placeholder="url">
  </div>
</div>
<!-- div.form-group>label.control-label.col-sm-2^div.col-sm-10>textarea.form-control -->
<div class="form-group">
    <label for="body" class="control-label col-sm-2">Content</label>
    <div class="col-sm-10">
    <textarea name="body" id="body" cols="30" rows="10" class="form-control" placeholder="content">{!!$page->body ?? ''!!}</textarea>
  </div>
</div>

<!-- div.form-group>div.col-sm-10.col-sm-offset-2>input.btn.btn-primary -->
@if($owner )
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <button type="submit" class="btn btn-primary">
        <i class="fa fa-floppy-o"></i>
        Save
      </button>
    </div>
  </div>
@else
  <div class="form-group">
    <div class="col-sm-10 col-sm-offset-2">
      <a class="btn btn-primary" href="{{route('pages.index')}}">
        <i class="fa fa-chevron-left"></i>
        Back
      </a>
    </div>
  </div>
@endif
