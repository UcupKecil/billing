
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="theme-color" content="#0d0072">
  <meta name="description" content="Membuat Aplikasi PWA Pertama">
  <link rel="apple-touch-icon" sizes="72x72" href="/frontend/logo/apple-icon-72x72.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./frontend/logo/favicon-32x32.png" alt="favicon icon">
  <meta name="msapplication-TileImage" content="./frontend/logo/ms-icon-144x144.png">

  <link rel="stylesheet" href="{{ asset('css') }}/base.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css') }}/vendor.css" rel="stylesheet">
  <link rel="stylesheet" href="{{ asset('css') }}/main.css" rel="stylesheet">

<script src="{{ asset('js') }}/modernizr.js"></script>
<script src="{{ asset('js') }}/pace.min.js"></script>
  
  @php
      $settings=DB::table('settings')->get();
  @endphp
  @foreach($settings as $h)

  <title>{{$h->short_des}}</title>

  <link rel="shortcut icon" href="{{$h->favicon}}">


  @endforeach

  <style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 0px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(odd) {
  background-color: #dddddd;
}
</style>


</head>
