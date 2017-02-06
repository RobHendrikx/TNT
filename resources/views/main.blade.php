
<!DOCTYPE html>
<html lang="en">
  <head>
      @include('partials.main._header')
  </head>

  <body>

    <section id="container" >
        
        @include('partials.main._topbar')

        @include('partials.main._sidebar')

        {{-- Content --}}
        @include('partials.main._wrapper')

        @include('partials.main._footer')
        
    </section>

        @include('partials.main._js')

      @yield('script')
  </body>
</html>