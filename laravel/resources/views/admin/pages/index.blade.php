@component('admin.layouts.elements.body')
@slot('title') <i class="fa fa-files-o" aria-hidden="true"></i> @endslot
@slot('description') Pages Administration @endslot
<!--table>thead>tr>th*3^^tbody>tr>td*3 -->
<table class="table table-hover">
  <thead>
    <tr>
      <th class="text-center text-capitalize text-info">#</th>
      <th class="text-capitalize text-uppercase text-info">
        <i class="fa fa-tag"></i>
        Title
      </th>
      <th class="text-right text-capitalize text-info">
        <a class="btn btn-primary btn-lg" href="{{ route('pages.create') }}">
          <i class="fa fa-plus-square-o" aria-hidden="true"></i> New Page
        </a>
      </th>
    </tr>
  </thead>
  @foreach($pages as $page)
  <tbody>
    <tr>
      <td class="text-center">{{$page->id}}</td>
      <td class="text">{{$page->title}}</td>
      <td class="text-right">
        <a class="btn btn-info" href="{{ route('pages.show', $page->id) }}">
          <i class="fa fa-eye" aria-hidden="true"></i> View
        </a>
        <a class="btn btn-success" href="{{ route('pages.edit', $page->id) }}">
          <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
        </a>
        <a class="btn btn-danger" href="{{ route('pages.destroy', $page->id) }}">
          <i class="fa fa-trash-o" aria-hidden="true"></i> Delete
        </a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $pages->links() }}
@endcomponent
