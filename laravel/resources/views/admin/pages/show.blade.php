@component('admin.layouts.elements.body')
@slot('title') <i class="fa fa-info-circle" aria-hidden="true"></i> @endslot
@slot('description') Page Details @endslot

<!-- table..table.table-hover>therad>tr>th*5^^tbody>tr>td*5 -->
<table class="table table-hover">
  <therad>
    <tr>
      <th><i class="text-info fa fa-user-o"></i> Owner</th>
      <th><i class="text-info fa fa-file-o"></i> Page</th>
      <th><i class="text-info fa fa-file-text-o"></i> Url</th>
      <th><i class="text-info fa fa-calendar-o"> Created</i></th>
      <th><i class="text-info fa fa-calendar-o"> Updated</i></th>
    </tr>
  </therad>
  <tbody>
    <tr>
      <td>Usuario(provisorio)</td>
      <td>{{ $page->title }}</td>
      <td><a href="#">{{ $page->url }}</a></td>
      <td>{{ $page->created_at->format('d/m/Y H:i:s') }}</td>
      <td>{{ $page->updated_at->format('d/m/Y H:i:s') }}</td>
    </tr>
  </tbody>
</table>

<h2 class="text-info"><i class="fa fa-eye"></i> Preview</h2>
{!!$page->body!!}

@endcomponent
