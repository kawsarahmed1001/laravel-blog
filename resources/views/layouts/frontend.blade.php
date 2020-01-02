<!DOCTYPE html>
<html lang="en">
  @include('partials.frontend.head')
  <body>

    @include('partials.frontend.header')

      @yield('content')
      
      @include('partials.frontend.getadmission')
      @include('partials.frontend.footer')
    

    <script src="js/scripts.min.js"></script>
    <script src="js/main.min.js"></script>
    <script src="js/custom.js"></script>

  </body>
</html>