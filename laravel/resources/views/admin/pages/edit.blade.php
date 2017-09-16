@component('admin.layouts.elements.body')
@slot('title') <i class="fa fa-pencil-square-o" aria-hidden="true"></i> @endslot
@slot('description') Page Edition @endslot

<form class="form-horizontal" action="{{route('pages.update', $page->id)}}" method="post">
  <input type="hidden" name="_method" value="PUT" />
  @include('admin.pages.form')
</form>

@endcomponent
