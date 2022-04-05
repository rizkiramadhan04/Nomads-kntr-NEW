<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>@yield('title')</title>

  {{-- CSS / Style --}}
  @include('includes.Admin.style')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Preloader -->
  <div class="preloader flex-column justify-content-center align-items-center">
    <img class="animation__shake" src="dist/img/AdminLTELogo.png" alt="AdminLTELogo" height="60" width="60">
  </div>

    {{-- navbar --}}
    @include('includes.Admin.navbar')

    {{-- sidebar --}}
    @include('includes.Admin.side-bar')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
   
    @yield('content')

  </div>
 
  {{-- footer --}}
  @include('includes.Admin.footer')

</div>
<!-- ./wrapper -->

{{-- javascript --}}
@include('includes.Admin.script')
</body>
</html>
