<!DOCTYPE html>
<html lang="en">
  <head>
   @include('includes.style')
  </head>
  <body>
    <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->
    @include('includes.navbar-alternate')
    @yield('content')

    @include('includes.footer')

    @include('includes.script')
    @stack('script')
  </body>
</html>
