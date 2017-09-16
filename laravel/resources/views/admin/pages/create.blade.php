@component('admin.layouts.elements.body')
@slot('title') <i class="fa fa-plus-square-o" aria-hidden="true"></i>  @endslot
@slot('description') Create Page @endslot

<form class="form-horizontal" action="{{route('pages.store')}}" method="post">
  @include('admin.pages.form')
</form>

@endcomponent
