
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Produk Toko nu Aing</title>



  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('assets/dist/css/adminlte.min.css') }}">
  <link rel="stylesheet" href="{{ asset('assets/summernote/summernote.min.css') }}">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/css/dropify.min.css" integrity="sha512-EZSUkJWTjzDlspOoPSpUFR0o0Xy7jdzW//6qhUkoZ9c4StFkVsp9fbbd0O06p9ELS3H486m4wmrCELjza4JEog==" crossorigin="anonymous" referrerpolicy="no-referrer" />

  @stack('style')
</head>
<body class="hold-transition sidebar-mini">
<!-- Site wrapper -->
<div class="wrapper">
  <!-- Navbar -->
  @include('components.templates.navbar')
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  @include('components.templates.sidebar')
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    @yield('content')
  </div>
  <!-- /.content-wrapper -->

  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.2.0
    </div>
    <strong>Copyright &copy; 2014-2021 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="{{ asset('assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('assets/dist/js/adminlte.min.js') }}"></script>

<script src="{{ asset('assets/summernote/summernote.min.js') }}"></script>



<script>

    $(document).ready(function() {
      $('#summary').summernote({
        placeholder: "Ketik disini .....",
          tabsize: 2,
          dialogsInBody: true,
          height: 80
      });
    });

    $(document).ready(function() {
      $('#description').summernote({
        placeholder: "Ketik disini ....",
          tabsize: 2,
          dialogsInBody: true,
          height: 100
      });
    });

    $(document).ready(function() {
      $('#quote').summernote({
        placeholder: "Ketik disini ....",
          tabsize: 2,
          dialogsInBody: true,
          height: 80
      });
    });


    $(document).ready(function() {
      $('#summaryEdit').summernote({
        placeholder: "Ketik disini .....",
          tabsize: 2,
          dialogsInBody: true,
          height: 80
      });
    });

    $(document).ready(function() {
      $('#descriptionEdit').summernote({
        placeholder: "Ketik disini ....",
          tabsize: 2,
          dialogsInBody: true,
          height: 100
      });
    });
    // $('select').selectpicker();

</script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/Dropify/0.2.2/js/dropify.min.js" integrity="sha512-8QFTrG0oeOiyWo/VM9Y8kgxdlCryqhIxVeRpWSezdRRAvarxVtwLnGroJgnVW9/XBRduxO/z1GblzPrMQoeuew==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(function () {
        $('#cover').dropify();
    });
</script>
<script>
    $(function () {
        $('#coverEdit').dropify();
    });
</script>
@stack('script')
</body>
</html>
