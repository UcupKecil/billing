
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


  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css">
  <!-- <link rel="stylesheet" href="./frontend/css/font-awesome-all.css"> -->
  <link rel="stylesheet" href="./frontend/bootstrap/css/bootstrap.css">
  <link rel="stylesheet" href="./frontend/bootstrap/css/bootstrap.min.css">
  <!-- <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
  <!--<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>-->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
  <script src="./frontend/js/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="./frontend/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <!--<script src="./frontend/fullcalendar/lib/main.js"></script>
  <script src="./frontend/fullcalendar/lib/main.min.js"></script>
  <script src="./frontend/js/fullcalender.js"></script>
  <link rel="stylesheet" href="./frontend/fullcalendar/lib/main.css">
  <link rel="stylesheet" href="./frontend/fullcalendar/lib/main.min.css">
  <script src="./frontend/js/moment.min.js"></script>
  <script src="./frontend/js/calender.js"></script>-->
  <link rel="stylesheet" href="./frontend/css/style.css">
  <link rel="stylesheet" href="./frontend/css/berita.css">
  <link rel="stylesheet" href="./frontend/css/calender.css">
  <script src="./frontend/js/index.js"></script>
  <link rel="manifest" href="./frontend/js/manifest.json">
  <script src="/frontend/js/moment.min.js"></script>
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
<head>

    <!--- basic page needs
    ================================================== -->
    <meta charset="utf-8">
     <title>Abstract</title>
     <meta name="description" content="">
     <meta name="author" content="">

    <!-- mobile specific metas
    ================================================== -->
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

      <!-- CSS
    ================================================== -->
    <link rel="stylesheet" href="css/base.css">
    <link rel="stylesheet" href="css/vendor.css">
    <link rel="stylesheet" href="css/main.css">


    <!-- script
    ================================================== -->
     <script src="js/modernizr.js"></script>
     <script src="js/pace.min.js"></script>

    <!-- favicons
     ================================================== -->
     <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
     <link rel="icon" href="favicon.ico" type="image/x-icon">

 </head>
