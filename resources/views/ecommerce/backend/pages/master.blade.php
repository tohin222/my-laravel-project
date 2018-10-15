<!DOCTYPE html>
<html lang="en">

<head>
@include('ecommerce.backend.partials.style')
</head>

<body>
  <div class="container-scroller">
    <!-- partial:partials/_navbar.html -->
    @include('ecommerce.backend.partials.navbar')


    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:partials/_sidebar.html -->
      @include('ecommerce.backend.partials.sidebar')

        @yield('content')



    </div>
  </div>
  @include('ecommerce.backend.partials.scripts')
</body>

</html>
