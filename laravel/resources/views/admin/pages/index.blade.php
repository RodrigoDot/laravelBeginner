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
        <input type="button" class="btn btn-info" value="View">
        <input type="button" class="btn btn-secondary" value="Edit">
        <input type="button" class="btn btn-danger" value="Delete">
      </td>
    </tr>
  @endforeach
  </tbody>
</table>
@endcomponent
 
