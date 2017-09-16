<!DOCTYPE html>
<html lang="en">
  <head>
    <title>{{ $title ?? 'Iniciando com o Laravel' }}</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/css/app.css" />
    <link rel="stylesheet" href="https://use.fontawesome.com/0b45c1657d.css" />
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
          <!-- a.btn.btn-primary-outline -->
          <a href="{{ url('/') }}" class="navbar-brand">
            <i class="fa fa-home"></i>
            {{ config('app.name', 'Home') }}
          </a>
          <a href="{{ route('pages.index') }}" class="navbar-brand">
            <i class="fa fa-files-o"></i>
            Pages Admin
          </a>
        </div>
        <ul class="nav navbar-nav navbar-right">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle text-uppercase" data-toggle="dropdown" role="button" aria-expanded="false">
            {{ Auth::user()->name }} <span class="caret"></span>
            </a>
            <ul class="dropdown-menu" role="menu">
              <li>
                <a href="{{ route('home') }}">
                  <i class="fa fa-user-o"></i>
                  Profile
                </a>
              </li>
              <li>
                <a href="{{ route('logout') }}"
                  onclick="event.preventDefault();
                           document.getElementById('logout-form').submit();">
                  <i class="fa fa-sign-out"></i>
                  Logout
                </a>
              <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                {{ csrf_field() }}
              </form>
              </li>
            </ul>
          </li>
        </ul>
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
