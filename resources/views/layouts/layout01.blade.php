@include('layouts.partials._head')
  <body>

    <header>
      @include('layouts.partials._header')
    </header>

    <main>
      @yield('content')
    </main>

    <footer>
      @include('layouts.partials._footer')
    </footer>

    @yield('script')

  </body>

</html>
