<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <title>@yield('title','laraavel ecommerce project')</title>
    @include('ecommerce.frontend.partials.style')
  </head>
  <body>

    <div class="wrapper">
                <!-- navigation -->
        @include('ecommerce.frontend.partials.nav')
          <!-- navbar part end -->
          @yield('content')
         @include('ecommerce.frontend.partials.footer')

 </div>

@include('ecommerce.frontend.partials.scripts')
  </body>
</html>
