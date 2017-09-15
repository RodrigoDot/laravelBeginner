<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title ?? 'Iniciando com o Laravel' }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
    <!--nav.navbar.navbar-default.navbar-static-top>div.container-fluid>div.navbar-header>button.navbar-toggle.collapsed>span.sr-only^span.icon-bar*3^a.navbar-brand -->
    <nav class="navbar navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="/admin">Laravel 5.4</a>
        </div>
      </div>
    </nav>
    <!-- main>section.container -->
    <main>
      <section class="container">
        {{ $slot }}
      </section>
    </main>
  <!-- JavaScript JS -->
  <script src="/js/app.js"></script>
  </body>
</html>
