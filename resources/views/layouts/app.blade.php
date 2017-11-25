
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
              <a class="nav-link {{isActiveRoute('prestamos.*', 'active')}}" href="{{ route('prestamos.index') }}">Prestamos</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isActiveRoute('cañoneras.*', 'active')}}" href="{{ route('cañoneras.index') }}">Cañoneras</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isActiveRoute('personas.*', 'active')}}" href="{{ route('personas.index') }}">Personas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isActiveRoute('facultades.*', 'active')}}" href="{{ route('facultades.index') }}">Facultades</a>
            </li>
            <li class="nav-item">
              <a class="nav-link {{isActiveRoute('incidentes.*', 'active')}}" href="{{ route('incidentes.index') }}">Incidentes</a>
            </li>
          </ul>
        </nav>
        <h3 class="text-muted">
          <figure class="logo">
            <img width="90px" height="75px" src="{{asset('images/logo.png')}}" alt="Sistema de Prestamos">
            Sistema de Prestamos
          </figure>
        </h3>
      </header>

      <main role="main">
        @yield('content')
      </main>

      <footer class="footer">
        @section('footer')
            <p>&copy; Jonathan Rai Samines Solares - 6590-13-38-13</p>
        @show
      </footer>
    </div> <!-- /container -->

    <script src="{{asset('js/app.js')}}"></script>
  </body>
</html>
