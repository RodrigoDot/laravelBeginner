@component('admin.layouts.elements.body')
@slot('title') Paginas  @endslot
@slot('description') Gerenciamento de paginas @endslot
<!--table>thead>tr>th*3^^tbody>tr>td*3 -->
<table class="table table-hover">
  <thead>
    <tr>
      <th class="text-center text-capitalize text-info">#</th>
      <th class="text-capitalize text-uppercase text-info">Title</th>
      <th class="text-right text-capitalize text-info">Actions</th>
    </tr>
  </thead>
  @foreach($pages as $page)
  <tbody>
    <tr>
      <td class="text-center">{{$page->id}}</td>
      <td class="text">{{$page->title}}</td>
      <td class="text-right">
        <a href="/pages/view"><input type="button" class="btn btn-info" value="View"></a>
        <a href="/pages/edit"><input type="button" class="btn btn-secondary" value="Edit"></a>
        <a href="/pages/destroy"><input type="button" class="btn btn-danger" value="Delete"></a>
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
{{ $pages->links() }}
@endcomponent
