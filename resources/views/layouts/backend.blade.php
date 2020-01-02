<!DOCTYPE html>
<html lang="en">

{{-- including head part --}}
@include('partials.backend.head')

  <body>
    <div class="container-scroller">
      {{-- including header part --}}
      @include('partials.backend.header')

      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        {{-- including aside part  --}}
        @include('partials.backend.aside')

        <!-- partial -->
        <div class="main-panel">
          <div class="content-wrapper">

            @yield('content')

          </div>
          <!-- content-wrapper ends -->
          
          {{-- including footer section  --}}
          @include('partials.backend.footer')
          <!-- partial -->
        </div>
        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="backend/vendors/js/vendor.bundle.base.js"></script>
    <script src="backend/vendors/js/vendor.bundle.addons.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="backend/js/shared/off-canvas.js"></script>
    <script src="backend/js/shared/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
  </body>
</html>