<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>@yield('tittle')</title>

    @stack('prepend-style')
    @include('includes.style')
    @stack('style')

  </head>
  <body>

 <!-- Semantic elements -->
    <!-- https://www.w3schools.com/html/html5_semantic_elements.asp -->

    <!-- Bootstrap navbar example -->
    <!-- https://www.w3schools.com/bootstrap4/bootstrap_navbar.asp -->

    @include('includes.navbar-alternate')

    @yield('content')

    @stack('prepend-script')
    @include('includes.script')
    @stack('script')

  </body>
</html>