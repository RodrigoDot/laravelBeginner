{!!csrf_field()!!}
<!-- div.form-control^label.form-label.col-sm-2^div.col-sm-10>input.form-control -->
<div class="form-control">
  <label for="" class="form-label col-sm-2"></label>
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
<div class="form-group">
  <div class="col-sm-10 col-sm-offset-2">
    <input type="submit" class="btn btn-primary" value="Save">
  </div>
</div>
