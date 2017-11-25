
<!doctype html>
<html lang="{{ app()->getLocale() }}">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Sistema de prestamo de cañoneras">
    <meta name="author" content="Jonathan Rai Samines Solares">

    <title>@yield('title', 'Sistema de Prestamo de Cañoneras')</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
  </head>

  <body>
    <div class="container">
      <header class="header clearfix">
        <nav>
          <ul class="nav nav-pills float-right">
            <li class="nav-item">
              <a class="nav-link active" href="{{ url('/') }}">Prestamos <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('cañoneras') }}">Cañoneras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('personas') }}">Personas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ url('facultades') }}">Facultades</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">Sistema de Prestamos</h3>
      </header>

      <main role="main">
        @yield('content')
      </main>

      <footer class="footer">
        @section('footer')
            <p>&copy; Jonathan Rai Samines Solares - 6590-13-38-13</p>
        @endsection
      </footer>
    </div> <!-- /container -->
  </body>
</html>
