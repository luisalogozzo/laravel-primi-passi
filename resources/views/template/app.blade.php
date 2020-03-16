@include('partials._header')


<div class="container">
  <header>
    @yield('header')
  </header>
  <main>
    @yield('main')
  </main>
  <footer>
    @yield('footer')
  </footer>
</div>

@include('partials._footer')
