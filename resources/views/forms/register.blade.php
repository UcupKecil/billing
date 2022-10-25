
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Registrasi Admin Portal Berita</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/fontawesome-free/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/assets/dist/css/adminlte.min.css') }}">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="register-logo">
    <a href="../../index2.html"><b>Pengelola</b>PortalBerita</a>
  </div>

  <div class="card">
    <div class="card-body register-card-body">
      <p class="login-box-msg">Registrasi Pengelola Portal Berita</p>

    <form action="{{url('/register')}}" method="post">
        @csrf
        @error('username')
                <span class="text-danger" style="display: block;">
                {{ $message }}
                </span>
        @enderror
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Name" name="name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>

        @error('email')
                <span class="text-danger" style="display: block;">
                {{ $message }}
                </span>
        @enderror
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Email" name="email">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>

        @error('role')
            <span class="text-danger" style="display: block;">
            {{ $message }}
            </span>
        @enderror
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Role" name="role">
            <div class="input-group-append">
              <div class="input-group-text">
                <span class="fas fa-user"></span>

              </div>
            </div>
          </div>

        @error('password')
            <span class="text-danger" style="display: block;">
            {{ $message }}
        @enderror
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
              </span>
            </div>
          </div>
        </div>


          <!-- /.col -->
          <center>
            <div class="col-4">
                <button type="submit" class="btn btn-primary btn-block">Register</button>
              </div>
              <!-- /.col -->
            </div>
          </center>

      </form>
      <center>
        <div class="mb-3">
            <a href="{{url('/login')}}" class="text-center">Masuk</a>
          </div>
      </center>

    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="{{ asset('/assets/plugins/jquery/jquery.min.js') }}"></script>
<!-- Bootstrap 4 -->
<script src="{{ asset('/assets/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
<!-- AdminLTE App -->
<script src="{{ asset('/assets/dist/js/adminlte.min.js') }}"></script>
</body>
</html>
