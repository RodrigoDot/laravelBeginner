@component('admin.layouts.default')
<!-- h3>small -->
<h2>{{ $title }} <small>{{ $description }}</small></h2>

<!-- div.panel.panel-default>div.panel-body -->
<div class="panel panel-default">
  <div class="panel-body">
    {{ $slot }}
  </div>
</div>
@endcomponent
