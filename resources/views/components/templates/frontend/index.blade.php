
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


</head>

<body>
  <div style="position:fixed;right:20px;bottom:20px;z-index:9;float:right;">
  <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo">
  <button style="background:transparant;float:right;width:10%;height:50%;border-radius:5px">
  <img src="./frontend/images/wa.png" width="100%" height="100%" alt="wa"></button></a>
  </div>
  <header>
  <div class="container-fluid p-0">
      <div class="nav top-toolbar row">
        <div class=" ml-2 text-white p-2 pb-0 col-8">
          <div class="  pt-0 pr-4" style="">
            <i class="fa fa-phone fa-flip-horizontal pr-3 font-weight-bold"></i>&nbsp;
            @foreach($set as $h)
            <b><span>{{$h->phone}}</span></b>

            <i class="fa fa-envelope font-weight-bold ml-2 pl-2" style="border-left: 1px solid #29387a5e;"></i>&nbsp;
            <span>{{$h->email}}</span>
            <i class="fa fa-map-marker-alt font-weight-bold ml-2 pl-2" style="border-left: 1px solid #29387a5e;"></i>&nbsp;
            <span class="">{{$h->address}}</span>
            @endforeach
          </div>
        </div>
        <!-- <div class=" ml-2 text-white p-2 col-xs-4 col-sm-4">
          <div class="  pt-0 pr-4" style="font-size: 14px;border-right: 1px solid #29387a5e
          ;">
            <i class="fa fa-map-marker-alt font-weight-bold"></i>&nbsp;
            @foreach($set as $h)
            <span>{{$h->address}}</span>
            @endforeach
          </div>
        </div>
        <div class=" ml-2 text-white p-2">
          <div class="  pt-0 pr-4" style="font-size: 14px">
            <i class="fa fa-envelope font-weight-bold"></i>&nbsp;
            @foreach($set as $h)
            <span>{{$h->email}}</span>
            @endforeach
          </div>
        </div> -->


        <!-- <div class=" ml-auto mr-auto text-light  p-2 pb-0">
          <div class="  d-inline-block pt-0 pr-2">
            <a href="" class=" text-decoration-none text-light ">
              <i class="fab fa-facebook-f " style="font-size: 20px;"></i></a>
          </div>
          <div class="  d-inline-block pt-0 pr-2">
            <a href="" class=" text-decoration-none text-light ">
              <i class="fab fa-twitter " style="font-size: 20px;"></i></a>
          </div>
          <div class="  d-inline-block pt-0 pr-2">
            <a href="" class=" text-decoration-none text-light ">
              <i class="fab fa-linkedin-in " style="font-size: 20px;"></i></a>
          </div>
          <div class="  d-inline-block pt-0 pr-2">
            <a href="" class=" text-decoration-none text-light ">
              <i class="fab fa-google-plus-g " style="font-size: 20px;"></i></a>
          </div>
        </div> -->
        <div class=" ml-auto text-white p-2 mr-4 pb-0" style=" font-size: 16px">
        <?php $k = 1;?>
        @foreach($lang as $l)
          <?php if($k % 2 == 0){
            echo "|";
          }
          $k++;
          ?>
          <a href="/-{{$l->tag}}" class=" text-white text-decoration-none">{{$l->tag}}</a>
          @endforeach
        </div>
      </div>
<!-- NAVBAR PERTAMA
      <nav class="navbar navbar-expand-sm  container-fluid navbar-light" id="navbar">
        <a class="navbar-brand font-weight-bold ml-3" href="#">
          <img src="./frontend/images/Logo-BKKBN.png" class=" img-resimg-responsive img-rounded" height="52px" alt="">
        </a>
        <button class="navbar-toggler bg-light d-lg-none" type="button" data-toggle="collapse"
          data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>

        <div class="collapse navbar-collapse d-flex justify-content-center" id="collapsibleNavId">
          <ul class="navbar-nav  mt-0 mt-lg-0">
            <li class="nav-item">
              <a href="#" class="nav-link menu active text-decoration-none text-dark p-2 pl-3 pr-3">
                BERANDA
              </a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link menu dropdown-toggle  text-dark p-2 pl-3 pr-3" id="dropdown1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">PROFIL </a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 200px;">
                <li class="dropdown-item" href="#"><a>Visi dan Misi</a></li>
                <li class="dropdown-item" href="#"><a>Sejarah BKKBN</a></li>
                <li class="dropdown-item" href="#"><a>Tugas, Pokok, dan Fungsi</a></li>
                <li class="dropdown-item" href="#"><a>Struktur Organisasi</a></li>
                <li class="dropdown-item" href="#"><a>Nilai dan Logo BKKBN</a></li>
                <li class="dropdown-item" href="#"><a>Profil Pejabat</a></li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link menu dropdown-toggle  text-dark p-2 pl-3 pr-3" id="dropdown1" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">INFORMASI PUBLIK </a>
              <ul class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 200px;">
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Daftar Informasi Publik</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 380px;">
                    <li class="dropdown-item " href="#"><a>Informasi Yang Wajib Disediakan Secara
                        Berkala</a></li>
                    <li class="dropdown-item" href="#"><a>Informasi Yang Wajib Disediakan Secara Serta Merta</a></li>
                    <li class="dropdown-item" href="#"><a>Informasi Yang Wajib Tersedia Setiap Saat </a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Profil PPID BKKBN</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 220px;">
                    <li class="dropdown-item" href="#"><a>Profil PPID</a></li>
                    <li class="dropdown-item" href="#"><a>Regulasi PPID BKKBN</a></li>
                    <li class="dropdown-item" href="#"><a>Rancangan Peraturan </a></li>
                    <li class="dropdown-item" href="#"><a>Jumlah Permintaan Informasi</a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Standar Layanan</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 300px;">
                    <li class="dropdown-item" href="#"><a>Maklumat Pelayanan</a></li>
                    <li class="dropdown-item" href="#"><a>Sarana Layanan</a></li>
                    <li class="dropdown-item" href="#"><a>Biaya Layanan</a></li>
                    <li class="dropdown-item" href="#"><a>Jadwal Layanan</a></li>
                    <li class="dropdown-item" href="#"><a>Tata Cara Pengajuan Keberatan</a></li>
                    <li class="dropdown-item" href="#"><a>Tata Cara Memperoleh Informasi Publik</a></li>
                    <li class="dropdown-item" href="#"><a>Tata Cara Sengketa Informasi Publik</a></li>
                    <li class="dropdown-item" href="#"><a>Hak dan Kewajiban Pemohon Informasi</a></li>
                    <li class="dropdown-item" href="#"><a>Hak dan Kewajiban Badan Publik</a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Data dan Informasi</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 320px;">
                    <li class="dropdown-item" href="#"><a>Laporan Pendataan Keluarga</a></li>
                    <li class="dropdown-item" href="#"><a>Laporan Pengandalian Lapangan (DALAP)</a></li>
                    <li class="dropdown-item" href="#"><a>Laporan Pengendalian Kontrasepsi (PELKON)</a></li>
                    <li class="dropdown-item" href="#"><a>Pidato Kepala BKKBN</a></li>
                    <li class="dropdown-item" href="#"><a>Hasil Penilitian</a></li>
                    <li class="dropdown-item" href="#"><a>Informasi Penjanjian Dengan Pihak Ketiga</a></li>
                    <li class="dropdown-item" href="#"><a>Daftar LHKPN</a></li>
                    <li class="dropdown-item" href="#"><a>Rencana Umum Pengadaan</a></li>

                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Akuntabilitas Pekerja</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 220px;">
                    <li class="dropdown-item" href="#"><a>Rencana Strategi (RENSTRA)</a></li>
                    <li class="dropdown-item" href="#"><a>Indekato Kinerja Umum</a></li>
                    <li class="dropdown-item" href="#"><a>Perjanjian Kinerja</a></li>
                    <li class="dropdown-item" href="#"><a>Laporan Kinerja</a></li>
                    <li class="dropdown-item" href="#"><a>Rencana Kerja (RENJA)</a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Program dan Kegiatan</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1">
                    <li class="dropdown-item" href="#"><a>Agenda Kerja</a></li>
                    <li class="dropdown-item" href="#"><a>Penerimanaan CPNS</a></li>
                    <li class="dropdown-item" href="#"><a>Open Bidding Eselon</a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Layanan Informasi</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 280px;">
                    <li class="dropdown-item" href="#"><a>Permohonan Informasi</a></li>
                    <li class="dropdown-item" href="#"><a>Pengajuan Keberatan Informasi Publik</a></li>
                    <li class="dropdown-item" href="#"><a>Pengaduan</a></li>
                  </ul>
                </li>
                <li class="dropdown-item dropdown">
                  <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">Survei Kepuasan</a>
                  <ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 220px;">
                    <li class="dropdown-item" href="#"><a>Survei Kepuasan PPID</a></li>
                    <li class="dropdown-item" href="#"><a>Hasil Survei Indeks Kepuasan</a></li>
                  </ul>
                </li>

            </li>
          </ul>
          </li>
          <li class="nav-item">
            <a href="#" class="nav-link menu text-decoration-none  text-dark p-2 pl-3 pr-3">
              KONTAK
            </a>
          </li>
          </ul>
        </div>
      </nav>
<!--END NAVBAR PERTAMA-->

<!--  NAVBAR KEDUA -->
<?php
/*
$null= [];
$sudah = 'N';
foreach($menu as $a){
  $parent = $a->id;
  foreach($menu as $z){
    if($parent == $z->parent_id){
      $i = 0;
      for($i=0; $i < count($null); $i++){
        if($null[$i] == $z->parent_id){
          $sudah = 'Y';
        }
      }
      if($sudah == 'N'){
        array_push($null,"$z->parent_id");
      }
    }
  }
};
for($i=0; $i < count($null); $i++){
  echo $null[$i]."</br>";
}*/
?>
@php
    $settings=DB::table('settings')->limit(1)->get();

@endphp

<!--<nav class="navbar navbar-expand-sm  container-fluid navbar-light" id="navbar">-->
    <nav class="navbar navbar-expand-sm  container-fluid navbar-light">
      <!--
        <a class="navbar-brand font-weight-bold ml-3" href="#">
          @foreach($settings as $h)
          <img src="{{$h->logo}}" class=" img-resimg-responsive img-rounded" height="52px" alt="">
          @endforeach
        </a>
        <button class="navbar-toggler bg-light d-lg-none" type="button" data-toggle="collapse"
          data-target="#collapsibleNavId" aria-controls="collapsibleNavId" aria-expanded="false"
          aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <!--<li class="nav-item">
              <a href="#" class="nav-link menu active text-decoration-none text-dark p-2 pl-3 pr-3">
                BERANDA
              </a>
            </li>-->
        <div class="navbar-header" style="margin-bottom:5px">
          <!-- <button class="navbar-toggler bg-white" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button> -->
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand text-right" href="https://bkkbn.jagadcreative.id/">
            <img src="{{$h->logo}}" class=" img-resimg-responsive img-rounded" height="52px" width="120px" alt="logo">
          </a>


        </div>

        <!--<div class="collapse navbar-collapse d-flex justify-content-center" id="collapsibleNavId">
          <ul class="navbar-nav  mt-0 mt-lg-0">
          <!-- PARENT PERTAMA -->
        <div class="collapse navbar-collapse bg-white"id="navbarNav" style="z-index:80">
          <!--<ul class="navbar-nav  mt-0 mt-lg-0 ml-auto mr-auto">-->
          <ul class="main-navigation ml-auto mr-auto">
          @php
            $menu=DB::table('menus')->where('group_id','2')->where('lang',$bahasa)->get();
        @endphp
            @foreach($menu as $m)
            <?php
            if($m->parent_id == '0'){
              $main = $m->id;
              $link = '#';
              $slug=DB::table('pages')->get();
              foreach($slug as $s){
                if ($m->url == $s->id){
                  $link = $s->slug;
                }
              }
              $child = "NO";
              foreach($menu as $b){
                if($b->parent_id == $main){
                  $child = "YES";
                }
              }
              if($child == "YES"){?>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link menu dropdown-toggle  text-dark p-2 pl-3 pr-3"  data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" href="{{$link}}">{{$m->title}} </a>
                    <ul class="dropdown-menu" style="min-width: 200px;">-->
                    <li>
                      <a href="{{$link}}" class="parent ">{{$m->title}}<i class="fa fa-sort-down" style="margin-left:2px;"></i>&nbsp;</a>
                      
                        <ul class="block-sub">
              <?php
              }
              else{?>
                <!--<li class="nav-item dropdown">
                  <a class="nav-link menu text-dark p-2 pl-3 pr-3"  href="{{$link}}">{{$m->title}} </a>-->
                  <li>
                <a href="{{$link}}" class="parent">{{$m->title}}</a>
              <!-- PARENT KEDUA -->
              <?php
              }
              foreach($menu as $b){
                if($b->parent_id == $main){
                  $sub = $b->id;
                  $link = '#';
                  $slug=DB::table('pages')->get();
                  foreach($slug as $s){
                    if ($b->url == $s->id){
                      $link = $s->slug;
                    }
                  }
                  $child2="NO";
                  foreach($menu as $c){
                    if($c->parent_id == $sub){
                      $child2="YES";}
                  }
                  if($child2 == "YES"){
                  ?>
                    <!--<ul class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 200px;">-->
                      <!--<li class="dropdown-item dropdown">
                        <a class="dropdown-toggle" id="dropdown1-1" data-toggle="dropdown" aria-haspopup="true"
                          aria-expanded="false" href="{{$link}}">{{$b->title}}</a>
                          <ul class="dropdown-menu"  style="min-width: 300px;">-->
                      <li>
                        <a href="{{$link}}" class="sub-cild">{{$b->title}}<i class="fa fa-sort-down" style="margin-right:5%; float:right;"></i>&nbsp;</a>
                          <ul class="block-sub block-sub2">

                  <?php
                  }else{?>
                    <!--<ul class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 200px;">-->
                      <!--<li class="dropdown-item dropdown">
                        <a  href="{{$link}}">{{$b->title}}</a>-->
                        <li ><a href="{{$link}}" class=" sub-cild">{{$b->title}}</a>
                  <?php
                  }
                  ?>
                        @foreach($menu as $c)
                        <?php
                          if($c->parent_id == $sub){
                            $link = '#';
                            $slug=DB::table('pages')->get();
                            foreach($slug as $s){
                              if ($c->url == $s->id){
                                $link = $s->slug;
                              }
                            }?>
                        <!--<ul class="dropdown-menu" aria-labelledby="dropdown1-1" style="min-width: 300px;">-->
                          <!--<li class="dropdown-item" ><a href="{{$link}}">{{$c->title}}</a></li>
                          <li class="dropdown-item" ><a  id="dropdown3-1" href="{{$link}}">{{$c->title}}fdssdf</a></li>-->
                          <li>
                              <a href="{{$link}}" class="sub-cild">{{$c->title}}</a>
                          </li>
                        <!--</ul>-->
                        <?php
                          }
                          ?>
                          @endforeach
                          <?php if($child2 == "YES"){
                            echo "</ul>";
                          } ?>
                    </li>
                  <!--</ul>-->
              <?php
                }
              }
              if($child == "YES"){
                echo "</ul>";
              }
                ?>
            </li>
            <?php
            }
            ?>
            @endforeach
          </ul>
        </div>
      </nav>
<!-- END NAVBAR KEDUA -->

<!-- NAVBAR KETIGA -->
    <!--
      <ul class="main-navigation ml-auto mr-auto">
            <li>
                <a href="#" class="parent">Home</a>
            </li>
            <li>
                <a href="#" class="parent dropdown-toggle">Profil</a>
                <ul class="block-sub">
                    <li ><a href="#" class=" sub-cild">Visi dan Misi</a></li>
                    <li ><a href="#" class=" sub-cild">Sejarah BKKBN</a></li>
                    <li ><a href="#" class=" sub-cild">Tugas, Pokok, danFungsi</a></li>
                    <li ><a href="#" class=" sub-cild">Struktur Organisasi</a></li>
                    <li ><a href="#" class=" sub-cild">Nilai dan Logo BKKBN</a></li>
                    <li ><a href="#" class=" sub-cild">Profil Pejabat</a></li>
                </ul>
            </li>
            <li>
                <a href="#" class="parent dropdown-toggle" >Informasi Publik</a>
                <ul class="block-sub">
                    <li>
                        <a href="#" class="sub-cild">Daftar Informasi Publik</a>
                        <ul class="block-sub block-sub2">
                            <li>
                                <a href="berita.html" class="sub-cild">Informasi Yang Wajib Disediakan Secara Berkala</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Informasi Yang Wajib Disediakan Secara Serta Merta</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Informasi Yang Wajib Tersedia Setiap Saat</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Profil PPID BKKBN</a>
                        <ul class="block-sub block-sub2">
                            <li>
                                <a href="#" class="sub-cild">Profil PPID</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Regulasi PPID BKKBN</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Regulasi PPID BKKBN</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Rancangan Peraturan</a>
                            </li>
                            <li>
                                <a href="#" class="sub-cild">Jumlah Permintaan Informasi</a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Standar Layanan</a>
                        <ul class="block-sub block-sub2">
                                <li><a class="sub-cild" href="#">Maklumat Pelayanan</a></li>
                                <li><a class="sub-cild" href="#">Sarana Layanan</a></li>
                                <li><a class="sub-cild" href="#">Biaya Layanan</a></li>
                                <li><a class="sub-cild" href="#">Jadwal Layanan</a></li>
                                <li><a class="sub-cild" href="#">Tata Cara Pengajuan Keberatan</a></li>
                                <li><a class="sub-cild" href="#">Tata Cara Memperoleh Informasi Publik</a></li>
                                <li><a class="sub-cild" href="#">Tata Cara Sengketa Informasi Publik</a></li>
                                <li><a class="sub-cild" href="#">Hak dan Kewajiban Pemohon Informasi</a></li>
                                <li><a class="sub-cild" href="#">Hak dan Kewajiban Badan Publik</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Data dan Informasi</a>
                        <ul class="block-sub block-sub2">
                            <li><a class="sub-cild" href="#">Laporan Pendataan Keluarga</a></li>
                            <li><a class="sub-cild" href="#">Laporan Pengandalian Lapangan (DALAP)</a></li>
                            <li><a class="sub-cild" href="#">Laporan Pengendalian Kontrasepsi (PELKON)</a></li>
                            <li><a class="sub-cild" href="#">Pidato Kepala BKKBN</a></li>
                            <li><a class="sub-cild" href="#">Hasil Penilitian</a></li>
                            <li><a class="sub-cild" href="#">Informasi Penjanjian Dengan Pihak Ketiga</a></li>
                            <li><a class="sub-cild" href="#">Daftar LHKPN</a></li>
                            <li><a class="sub-cild" href="#">Rencana Umum Pengadaan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Akuntanbilitas Pekerja</a>
                        <ul class="block-sub block-sub2">
                                <li><a class="sub-cild" href="#">Rencana Strategi (RENSTRA)</a></li>
                                <li><a class="sub-cild" href="#">Indekato Kinerja Umum</a></li>
                                <li><a class="sub-cild" href="#">Perjanjian Kinerja</a></li>
                                <li><a class="sub-cild" href="#">Laporan Kinerja</a></li>
                                <li><a class="sub-cild" href="#">Rencana Kerja (RENJA)</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Program dan Kegiatan</a>
                        <ul class="block-sub block-sub2">
                            <li><a class="sub-cild" href="#">Agenda Kerja</a></li>
                            <li><a class="sub-cild" href="#">Penerimanaan CPNS</a></li>
                            <li><a class="sub-cild" href="#">Open Bidding Eselon</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Layanan Informasi</a>
                        <ul class="block-sub block-sub2">
                            <li><a class="sub-cild" href="#">Permohonan Informasi</a></li>
                            <li><a class="sub-cild" href="#">Pengajuan Keberatan Informasi Publik</a></li>
                            <li><a class="sub-cild" href="#">Pengaduan</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#" class="sub-cild">Survey Kupuasan</a>
                        <ul class="block-sub block-sub2">
                            <li><a class="sub-cild" href="#">Survei Kepuasan PPID</a></li>
                            <li><a class="sub-cild" href="#">Hasil Survei Indeks Kepuasan</a></li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#" class="parent">Kontak</a>
            </li>
      </ul> -->
    <!-- END NAVBAR KETIGA -->

    </div>
  </header>
@if(count($banners)>0)
  <div class="slider" id="slider">
    <div id="carouselExampleIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
      <div class="carousel-inner" aria-label="slider" >
        @foreach($banners as $key=>$banner)
        <div class="carousel-item carousel-banner {{(($key==0)? 'active' : '')}}" style="background-image: url('{{$banner->photo}}'); background-size: 100% 100%">
          <div class="banner">
            <div class="inner-news ">
              <form method="GET" action="/paginate">
                @csrf
              <div class="input-group input-group-lg ml-auto mr-auto">
                <input type="text" class="form-control h-100  bg-transparent" placeholder=""
                  aria-label="Recipient's username" name="search">
                <div class="input-group-append">
                  <button class="btn btn-primary  ml-0" type="submit" aria-label="Center Align" ><span class="fa fa-search"
                      style="font-size: x-large;"></span></button>
                </div>


              </div>
                </form>
            </div>
          </div>
        </div>
        <a class="carousel-control-prev   bg-primary"
          style="margin-top: 15%;width: 4%;height:  8%;margin-left: 50px;border-radius: 45%;float: left; z-index:0;"
          href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon " aria-hidden="true" style="font-size: large;"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next  bg-primary"
          style="margin-top: 15%;width:  4%;height:  8%;margin-right: 50px;border-radius: 45%;float: right; z-index:0;"
          href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true" style="font-size: large;"></span>
          <span class="sr-only">Next</span>
        </a>
        @endforeach
      </div>
    </div>
  </div>
  @endif



  <!-- search -->
@if(count($posts)>0)
  <div class="form ml-auto mr-auto col-12">
    <div class="form-row ">
      <!-- <div class=" ml-3 p-2" style="height:fit-content;">
        <a href="#" class="h3 text-decoration-none font-weight-bold">BKKBN KINI</a>
      </div> -->
      <div class="slider container-fluid section-news" id="news">
        <div id="carouselNewsIndicators" class="carousel slide my-carousel my-carousel" data-ride="carousel">
          <ol class="carousel-indicators">
              @foreach($posts as $key=>$post)
          <li data-target="#carouselNewsIndicators" data-slide-to="{{$key}}" class="{{(($key==0)? 'active' : '')}}"></li>
              @endforeach
          </ol>


          <div class="carousel-inner" aria-label="news">
                  @foreach($posts as $key=>$post)
                  <div class="carousel-item {{(($key==0)? 'active' : '')}} carousel-news  card-img-top carousel-cards"style="background-color:#003170;height: 250px;">

                    <img src="{{$post->photo}}" class="img-news float-left mt-4 ml-5 mr-3"  width="250px"
                      height="150px" alt="">
                      <div class="mt-4  news-ket text-white">
                        <a href="{{$post->slug}}" class="h3 text-decoration-none " style="color:#56a7ff">{{$post->title}}</a>
                        <p style="font-size: 15px; " class=" text-warning-50">{{$post->tanggal}}
                        </p>
                        <p class="harga"><?php echo \Illuminate\Support\Str::limit(strip_tags($post->description), 300, $end='...') ?></p>
                        <a href="{{$post->slug}}" class="font-weight-bold text-warning position-relative"
                          style="margin-left: auto;margin-right: auto;">Berat</a>
                      </div>

                  </div>
              @endforeach
          </div>


          <a class="carousel-control-prev bg-secondary  p-1 "
            style="width: 25px;margin-left: 0px;float: left;border-top-left-radius: 10px;border-top-right-radius: 10px; z-index:0;"
            href="#carouselNewsIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon " aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
          </a>
          <a class="carousel-control-next bg-secondary   p-1 "
            style="width: 25px;margin-right: 0px;float: right;border-top-left-radius: 10px;border-top-right-radius: 10px; z-index:0;"
            href="#carouselNewsIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
      </div>
    </div>
  </div>
@endif
<?php
  $pej = DB::table('pejabats')->where('jabatan','Kepala BKKBN')->where('lang',$bahasa)->get();
  ?>
  @foreach($pej as $p)
  <div class=" section-jumbo">
    <section id="form">
      <div class="container-fluid">
        <div class="row no-gutter ">
          <div class="col-md-5 col-sm-12 col-lg-5 mb-0" style="background-color: #fff;">
            <!--<h4 class=" font-weight-bold p-3">KEPALA BKKBN</h4>-->
            </br>
            <div class=" text-center ml-auto mr-auto">
              <img src="{{$p->photo}}" width="225" height="250" alt="">
              <h5 class=" font-weight-bold mt-2">{{$p->nama}}</h5>
              <h6>{{$p->jabatan}}</h6>
            </div>
            <div class=" ml-auto mr-auto p-4 mt-4 mb-2"
              style="padding: 20px 0 ;background-color: #6db6ff;width: fit-content;">
              <span class="fa fa-quote-left font-weight-bold"></span>
              <?php echo $p->description ?>
              <span class="fa fa-quote-right float-right font-weight-bold"></span>
            </div>
            <div class=" text-center mb-3">
              <!--<a href="" class=" font-italic">selengkapnya</a>-->
            </div>
          </div>
  @endforeach
          <!-- The image half -->
          <div class="col-md-7 col-sm-12 col-lg-7 " style="background-color: #fff;">
            <div class=" mt-1 mb-1" style=" border-left: 2px solid #cfcfcf;">
              <div class="kalender">
              <?php
              $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','agenda')->get(); 
              foreach($agen as $a){
                echo '<h4 class=" font-weight-bold p-3">'.$a->title.'</h4>';
              }
              ?>
                
                <div id="inicalendar" ></div>
              </div>

              <!--<div id="calendar"></div>
              <!-- <h1 style="padding: 20px 0;">Media Keluarga Berencana</h1>
              <h4>Jelah Sejarah Keluaga Berencana</h4>
              <p class=" text-black-50" style="font-size: 15px;">Media KB Edisi Oktober 2020</p>
              <div class=" d-inline-block">
                <a href="" class="btn btn-primary p-3 pl-4 pr-4">Unduh</a>
                <a href="" class="btn btn-primary p-3 pl-4 pr-4">Edisi Lainnya</a>
                <a href="" class=" text-dark ml-3"> + EMagazine</a>
              </div> -->
              <!--<ul class="timeline">-->
              <?php /*$z = 1;?>
                @foreach($agenda as $a)
                <li>
                  <?php
                  if($z % 2 == 0){
                    ?>
                      <div class="direction-r">
                    <?php
                  }else{
                    ?>
                    <div class="direction-l">
                    <?php
                  }
                  ++$z;
                  ?>
                    <div class="flag-wrapper">
                      <span class="flag">{{$a->title}}</span>
                      <span class="time-wrapper"><span class="time">{{$a->created_at}}</span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: left;">
                      <p class=" ket">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, obcaecati ullam. Aspernatur autem,
                      </p>

                    </div> -->
                  </div>
                </li>

                @endforeach
                <li>
                  <div class="direction-r">
                    <div class="flag-wrapper">
                      <span class="flag">Dra. Hj. Khofifah Indar P, M.Si</span>
                      <span class="time-wrapper"><span class="time">1999 - 2001</span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: left;">
                      <p class=" ket">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, obcaecati ullam. Aspernatur autem,
                      </p>

                    </div> -->
                  </div>
                </li>

                <!-- Item 2 -->
                <li>
                  <div class="direction-l">
                    <div class="flag-wrapper">
                      <span class="flag">Prof. Dr. Yaumil Agoes Achir </span>
                      <span class="time-wrapper"><span class="time">2001 - 2003</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: right;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>

                <!-- Item 1 -->
                <li>
                  <div class="direction-r">
                    <div class="flag-wrapper">
                      <span class="flag">Dr. Sumarjati Arjoso, SKM</span>
                      <span class="time-wrapper"><span class="time">2003 - 2006</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: left;">
                      <p class=" ket">
                        Lorem ipsum dolor, sit amet consectetur adipisicing elit. Ea, obcaecati ullam. Aspernatur autem,
                      </p>

                    </div> -->
                  </div>
                </li>

                <!-- Item 2 -->
                <li>
                  <div class="direction-l">
                    <div class="flag-wrapper">
                      <span class="flag">dr. Sugiri Syarief, MPA </span>
                      <span class="time-wrapper"><span class="time">2006 - 2013</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: right;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>

                <!-- Item 3 -->
                <li>
                  <div class="direction-r">
                    <div class="flag-wrapper">
                      <span class="flag">Prof. dr. Fasli Jalal, Ph.D, Sp.Gk </span>
                      <span class="time-wrapper"><span class="time">2013 - 2015</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: left;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>

                <!-- item 4 -->
                <li>
                  <div class="direction-l">
                    <div class="flag-wrapper">
                      <span class="flag">dr. Surya Chandra S, MPH, Ph.D </span>
                      <span class="time-wrapper"><span class="time">2015 - 2017</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="25%"
                        style="border-radius: 50%;float: right;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>
                <li>
                  <div class="direction-r">
                    <div class="flag-wrapper">
                      <span class="flag">dr. Sigit Priohutomo, MPH </span>
                      <span class="time-wrapper"><span class="time">2017 - 2019</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="75px" height="75px"
                        style="border-radius: 50%;float: left;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>
                <li>
                  <div class="direction-l">
                    <div class="flag-wrapper">
                      <span class="flag">Dr. Hasto Wardoyo </span>
                      <span class="time-wrapper"><span class="time">2019 - sekarang</span></span>
                    </div>
                    <!-- <div class="desc">
                      <img src="./frontend/images/pimpinan.jpg" alt="" width="25%"
                        style="border-radius: 50%;float: right;">
                      <p class=" ket">
                        BKKBN Baru dengan Cara Baru dan Semangat Baru Hadir Dalam Keluarga
                      </p>

                    </div> -->
                  </div>
                </li>
                */?>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  </div>

  <!-- pengumuman -->
  <div class=" mb-12 " style="background-color: #1976d2;width: 100%;">
  <?php
    $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','pengumuman')->get(); 
    foreach($agen as $a){
      echo '<p style="position: absolute;font-size: 18px;font-family: Arial, Helvetica, sans-serif;color:white; "
      class=" ml-3 p-2 font-weight-bold ">'.$a->title.':
      </p>';
    }
    ?>
    <!--<marquee class="p-2 text-white" onmouseover="this.stop()" onmouseout="this.start()" direction="left"
      scrollamount="5" style="margin-left: 165px;margin-right: 50px;">
      Lorem ipsum dolor sit amet consectetur, adipisicing elit. Assumenda cupiditate voluptatum similique
      ipsam veniam, quam quibusdam eligendi voluptate et. Ab perspiciatis non veniam illum pariatur quas
      excepturi dignissimos corrupti vero.
    </marquee>-->
    <?php
    $post = \App\Models\Post::where('lang',$bahasa)->where('post_cat_id','16')->get();
    ?>

    <marquee class="p-2 text-white" onmouseover="this.stop()" onmouseout="this.start()" direction="left"
      scrollamount="5" style="margin-left: 165px;margin-right: 50px;">
      @foreach($post as $p)
      {{$p->title}} &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;/&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
      @endforeach
    </marquee>

  </div>
  @php
      $berita_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->orderBy('id','ASC')->limit(3)->get();
  @endphp
  @foreach($berita_lists as $berita)
  <div class="news-data m-0 p-0">

    <div class="news" style="background-image: url({{$berita->photo}});background-size: 100%;">
      <div class="news-text">
        <a href="{{$berita->slug}}" class=" text-white d-block text-decoration-none mb-3" style="font-size:20px">{{$berita->title}}</a>
        <div class="d-flex justify-content-center mb-3 ml-auto mr-auto">
          <a href="{{$berita->slug}}" class="btn  btn-warning" style="margin-left: 0 !important;"><b>Indeks</b></a>
        </div>
      </div>
    </div>
  </div>
  @endforeach
  <!-- Tabs -->
  <section id="tabs">
    <div class="container">
      <h1></h1>
      <h2></h2>
      <h3></h3>
      <h4></h4>
      <h5></h5>
      <?php
      $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','informasi')->get(); 
      foreach($agen as $a){
        echo '<h6 class="section-title h1">'.$a->title.'</h6>';
      }
      ?>
      <div class="row">
        <div class="col-xs-12 ">
          <nav>
            <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
              <a class="nav-link nav-item active" id="nav-pengumuman-tab" data-toggle="tab" href="#nav-pengumuman"
                role="tab" aria-controls="nav-pengumuman" aria-selected="true">
                <span class="fa fa-bullhorn" style="font-size: 75px;"></span><br><br>
                <?php
                $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','pengumuman')->get(); 
                foreach($agen as $a){
                  echo '<span style="color: #1976d2;">'.$a->title.'</span>';
                }
                ?>
              </a>

              <a class="nav-link nav-item " id="nav-pers-tab" data-toggle="tab" href="#nav-pers" role="tab"
                aria-controls="nav-pers" aria-selected="true">
                <span class="fa fa-newspaper " style="font-size: 75px;"></span><br><br>
                <?php
                $agen=DB::table('post_categories')->where('lang',$bahasa)->where('kondisi','pers')->get(); 
                foreach($agen as $a){
                  echo '<span style="color: #1976d2;">'.$a->title.'</span>';
                }
                ?>
              </a>
              <a class="nav-link nav-item " id="nav-artikel-tab" data-toggle="tab" href="#nav-artikel" role="tab"
                aria-controls="nav-artikel" aria-selected="true">
                <span class="fa fa-globe-asia" style="font-size: 75px;"></span><br><br>
                <?php
                $agen=DB::table('post_categories')->where('lang',$bahasa)->where('kondisi','artikel')->get(); 
                foreach($agen as $a){
                  echo '<span style="color: #1976d2;">'.$a->title.'</span>';
                }
                ?>
              </a>
              <a class="nav-link nav-item " id="nav-berita-tab" data-toggle="tab" href="#nav-berita" role="tab"
                aria-controls="nav-berita" aria-selected="true">
                <span class="fa fa-bell" style="font-size: 75px;"></span><br><br>
                <?php
                $agen=DB::table('post_categories')->where('lang',$bahasa)->where('kondisi','beritaunit')->get(); 
                foreach($agen as $a){
                  echo '<span style="color: #1976d2;">'.$a->title.'</span>';
                }
                ?>
              </a>

            </div>
          </nav>
          @php
              $pengumuman_lists=DB::table('pengumumen')->where('lang',$bahasa)->where('status','active')->orderBy('id','ASC')->limit(4)->get();
          @endphp
          <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
            <div class="tab-pane fade show active" id="nav-pengumuman" role="tabpanel"
              aria-labelledby="nav-pengumuman-tab">
              <div class="row row-cols-1 row-cols-md-4 border-0">
                @foreach($pengumuman_lists as $pengumuman)
                <div class="col text-center pl-2 pr-2 pb-0">
                  <div class="border-0  ">
                    <a href="{{$pengumuman->slug}}" class=" text-dark text-decoration-none">
                      <div class="card-body tabs-item ">
                        <h6 class="card-title font-weight-bold" style="font-size: 18px;">18/08/2020 - 01/09/2020
                        </h6>
                        <p class="card-text tab-text">{{$pengumuman->title}} </p>
                      </div>
                    </a>

                  </div>
                </div>
                @endforeach
              </div>

            </div>

            @php
                $siaran_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->where('post_cat_id','12')->orderBy('id','ASC')->limit(4)->get();
            @endphp
            <div class="tab-pane fade" id="nav-pers" role="tabpanel" aria-labelledby="nav-pers-tab">
              <div class="row row-cols-1 row-cols-md-4 border-0">
                @foreach($siaran_lists as $siaran)
                <div class="col text-center pl-2 pr-2 pb-0">
                  <div class="border-0  ">
                    <a href="{{$siaran->slug}}" class=" text-dark text-decoration-none">
                      <div class="card-body tabs-item ">
                        <h6 class="card-title font-weight-bold" style="font-size: 18px;">20/02/2020
                        </h6>
                        <p class="card-text tab-text">{{$siaran->title}} </p>
                      </div>
                    </a>

                  </div>
                </div>
                @endforeach
              </div>

            </div>

            @php
                $artikel_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->where('post_cat_id','8')->orderBy('id','ASC')->limit(4)->get();
            @endphp
            <div class="tab-pane fade" id="nav-artikel" role="tabpanel" aria-labelledby="nav-artikel-tab">
              <div class="row row-cols-1 row-cols-md-4 border-0">
                @foreach($artikel_lists as $artikel)
                <div class="col text-center pl-2 pr-2 pb-0">
                  <div class="border-0  ">
                    <a href="{{$artikel->slug}}" class=" text-dark text-decoration-none">
                      <div class="card-body tabs-item ">
                        <h6 class="card-title font-weight-bold" style="font-size: 18px;">21/05/2020
                        </h6>
                        <p class="card-text tab-text">{{$artikel->title}} </p>
                      </div>
                    </a>

                  </div>
                </div>
                @endforeach
              </div>

            </div>

            @php
                $berita_unit_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->where('post_cat_id','9')->orderBy('id','ASC')->limit(4)->get();
            @endphp
            <div class="tab-pane fade" id="nav-berita" role="tabpanel" aria-labelledby="nav-berita-tab">
              <div class="row row-cols-1 row-cols-md-4 border-0">
                @foreach($berita_unit_lists as $berita_unit)
                <div class="col text-center pl-2 pr-2 pb-0">
                  <div class="border-0  ">
                    <a href="{{$berita_unit->slug}}" class=" text-dark text-decoration-none">
                      <div class="card-body tabs-item ">
                        <h6 class="card-title font-weight-bold" style="font-size: 18px;">21/02/2019
                        </h6>
                        <p class="card-text tab-text">{{$berita_unit->title}} </p>
                      </div>
                    </a>

                  </div>
                </div>
                @endforeach



              </div>

            </div>
          </div>

        </div>
      </div>
    </div>
  </section>

    @php
        $aplikasi_lists=DB::table('aplikasis')->where('status','active')->orderBy('id','DESC')->limit(8)->get();
    @endphp

  <div class=" container-fluid row-inline mt-5 mb-5">
    <div class="row no-gutter ">
      <div class="col-md-7 col-sm-12 col-lg-7 mb-3">
      <?php
      $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','aplikasi')->get(); 
      foreach($agen as $a){
        echo '<h4 class=" font-weight-bold p-3">'.$a->title.'</h4>';
      }
      ?>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 border-0">
          @foreach($aplikasi_lists as $aplikasi)
          <div class="col  p-1">
            <div class="card border-0   bg-transparent" style="box-shadow: none !important;">
              <a href="{{$aplikasi->slug}}" class=" text-decoration-none text-dark btn btn-outline-dark"
                style="border: 2px solid rgb(49, 49, 49);border-radius: 5px;">
                <img src="{{$aplikasi->photo}}" class="  text-center float-left " width="140px" height="140px"
                  style="border-radius: 5px;" alt="aplikasi"></img>
                <p style="font-size: large; " class=" font-weight-bold">{{$aplikasi->title}} <br> <span
                    class=" font-weight-light">BKKBN</span> </p>
              </a>
            </div>
          </div>
          @endforeach
        </div>
      </div>

      <!-- The part half -->
      <div class="col-md-5 col-sm-12 col-lg-5 announcement">
        <div class="  position-relative pl-3 pr-3" style=" border-left: 2px solid #cfcfcf;">
          <!--<h4 class=" font-weight-bold p-3">DAFTAR PENGUMUMAN BKKBN JABAR</h4>
          @php
              $pengumuman_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->where('post_cat_id','10')->orderBy('id','ASC')->limit(6)->get();
          @endphp
          @foreach($pengumuman_lists as $pengumuman)
          <div class="ca-content"><img src="./frontend/images/megaphone2.png" alt="" width="20%" height="auto" style="margin-right:20px;"><a style="color:black;" href="{{$pengumuman->slug}}">{{$pengumuman->title}}</a></div>
          <br></br>
          @endforeach -->
          <h4 class=" font-weight-bold p-3">BKKBN LINK</h4>
          <div class="row row-cols-2  border-0">

          @php
              $pengumuman_1=DB::table('links')->where('status','active')->orderBy('id','ASC')->limit(4)->get();
          @endphp
          @foreach($pengumuman_1 as $pengumuman)
          <div class="row">
            <div class="col text-center p-1">
              <div class="card border-0  bg-transparent" style="box-shadow: none !important;">

                <div class="col-lg-12 col-md-12 col-sm-12"  style="border-radius: 5px; height:auto; width:100%">
                  <a href="{{$pengumuman->url}}" class=" text-decoration-none text-dark ">
                    <img src="{{$pengumuman->photo}}" class="img-link text-center" style="border-radius: 5px; height:200px; width:100%" height="52px" alt="link bkkbn">
                  </a>
                </div>
              </div>
            </div>
          </div>
          @endforeach
          </div>
          <!--
          <ul style="list-style:none" class="list-announ">
            <li>
              <a href="" target="_blank" title="">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
              </a>
            </li>
            <li >
              <a href="" target="_blank" title=" ">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit amet consectetur </div>
              </a>
            </li>
            <li style="padding: 4px 0;">
              <a href="" target="_blank" title=" ">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
              </a>
            </li>
            <li style="padding: 4px 0;">
              <a href="" title=" ">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit amet consectetur adipisicing </div>
              </a>
            </li>
            <li style="padding: 4px 0;">
              <a href="" target="_blank" title="">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit </div>
              </a>
            </li>
            <li style="padding: 4px 0;">
              <a href="" target="_blank" title="">
                <img src="./frontend/images/megaphone.png" alt="" width="10%">
                <div class="ca-content">Lorem ipsum dolor sit amet t</div>
              </a>
            </li>

          </ul>-->
        </div>
        
      </div>
      
      </div>
    </div>
  </div>
  @php
          $widget=DB::table('widgets')->where('status','active')->orderBy('id','ASC')->limit(4)->get();
          $kiri=DB::table('widgets')->where('status','active')->where('side','kiri')->orderBy('id','ASC')->get();
          $kanan=DB::table('widgets')->where('status','active')->where('side','kanan')->orderBy('id','ASC')->get();
      @endphp
  <div class=" container-fluid row-inline mt-5 mb-5">
    <div class="row no-gutter ">
      <div class="col-md-6 col-sm-12 col-lg-6 mb-3">
        @foreach($kiri as $row)
        <h4 class=" font-weight-bold p-3">{{ $row->title }}</h4>
        <div class="align-middle text-center">
          {!! $row->embed !!} 
        </div>
        @endforeach
      </div>
      <!-- The part half -->
      <div class="col-md-6 col-sm-12 col-lg-6 announcement">
        <div class="  position-relative pl-3 pr-3" style=" border-left: 2px solid #cfcfcf;">
          @foreach($kanan as $row)
          <h4 class=" font-weight-bold p-3">{{ $row->title }}</h4>
          <div class="align-middle text-center">
            {!! $row->embed !!} 
          </div>
          @endforeach
        </div>
      </div>
    </div>
  </div>


  <!-- <div class="row flex-row mr-3 ml-3 mt-5 mb-0" style="background-color: #1976d2;">
    <div class=" d-block p-3 pb-2 pl-5 text-light">
      <h4 class=" font-weight-bold d-block">LOOKING TO SELL YOUR HOME?</h4>
      <p class=" d-block">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
    </div>
    <div class=" d-flex ml-auto mr-auto p-3 text-light">
      <span class="fa fa-phone fa-flip-horizontal pt-2 float-left" style="font-size: 45px;"></span>
      <span class=" pl-3">
        <p class=" font-weight-light" style="font-size:15px">CALL US NOW</p>
        <h6 class=" mt-n3 font-weight-bold" style="font-size: 20px;">(+62) 899 9900 0011</>
      </span>
    </div>
    <div class=" d-flex p-3 pb-5 pt-4 mr-3">
      <a href="" class="btn btn-light pl-3 pr-3"> GET IN TOUCH</a>
    </div>
  </div> -->
  @php
      $settings=DB::table('settings')->where('lang',$bahasa)->get();
  @endphp
  <footer class="footer footer-large bg-dark" id="footer">
    <div class="row row-cols-1 row-cols-md-3 border-0 ml-2 mr-2 mt-0"
      style="border-bottom: 1px solid rgba(204, 204, 204, 0.493);">
      <div class="col pl-1 pr-1 pb-0">
        <div class="card border-0 text-white  bg-transparent" style="box-shadow: none !important;">
          <div class="card-body">
            <a class="navbar-brand font-weight-bold text-white pb-2" style="font-size: xx-large;" href="#">BKKBN</a>
            <p class=" text-white-50 pt-2 pb-2">@foreach($settings as $data) {!! html_entity_decode($data->description) !!} @endforeach</p>
            <p class=" pt-1 pb-1 " style="font-size: 15px;">
              <span class="fa fa-map-marker-alt" style="font-size: 20px;color: #1976d2;"></span>&nbsp;
              @foreach($settings as $data) {{$data->address}} @endforeach
            </p>
            <p class=" pt-1 pb-1 " style="font-size: 15px;">
              <span class="fa fa-phone fa-flip-horizontal " style="font-size: 20px;color: #1976d2;"></span>&nbsp;
              @foreach($settings as $data) {{$data->phone}} @endforeach
            </p>
            <p class=" pt-1 pb-1 " style="font-size: 15px;">
              <span class="fa fa-envelope" style="font-size: 20px;color: #1976d2;"></span>&nbsp;
              @foreach($settings as $data) {{$data->email}} @endforeach
            </p>
            <p class=" pt-1 pb-1 " style="font-size: 15px;">
              <span class="fa fa-clock" style="font-size: 20px;color: #1976d2;"></span>&nbsp; @foreach($settings as $data) {{$data->layanan}} @endforeach
            </p>
          </div>
        </div>
      </div>
      <div class="col pb-0 ">
        <div class="card border-0 text-white bg-transparent text-center" style="box-shadow: none !important;">
          <div class="card-body">
          <?php
            if($bahasa == 3){
              echo '<span class="navbar-brand font-weight-bold text-white pb-2 pt-3" style="font-size: x-large;">PROFILE</span>';
            }else{                
              echo '<span class="navbar-brand font-weight-bold text-white pb-2 pt-3" style="font-size: x-large;">PROFIL</span>';
            }
            ?>
            <nav class="nav flex-column text-left " style="font-size:16px;font-weight: 500;">
            @php
            $menu=DB::table('menus')->where('group_id','2')->get();
        @endphp
            <?php
            foreach($menu as $m){
                if($bahasa == 3){
                  if($m->parent_id == '312'){
                    echo '<a class="nav-link text-white pt-2 pb-2  active" href="#">'.$m->title,'</a>';
                  }
                }elseif($m->parent_id == '50'){                
                  echo '<a class="nav-link text-white pt-2 pb-2  active" href="#">'.$m->title,'</a>';
                }
            }?>
              <!--<a class="nav-link text-white pt-2 pb-2  active" href="#">Visi dan Misi</a>
              <a class="nav-link text-white pt-2 pb-2 " href="#">Sejarah BKKBN </a>
              <a class="nav-link text-white pt-2 pb-2 " href="#">Tugas,Pokok dan Fungsi</a>
              <a class="nav-link text-white pt-2 pb-2 " href="#">Struktur Organisasi</a>
              <a class="nav-link text-white pt-2 pb-2 " href="#">Nilai dan Logo BKKBN</a>
              <a class="nav-link text-white pt-2 pb-2 " href="#">Profil Pejabat</a>-->
            </nav>

          </div>
        </div>
      </div>
      <div class="col pl-1 pr-1 pb-0">
        <div class="card border-0 text-white  bg-transparent" style="box-shadow: none !important;">
          <div class="card-body">
          <?php
          $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','ikuti')->get(); 
          foreach($agen as $a){
            echo '<span class="navbar-brand font-weight-bold text-white pb-3 pt-3" style="font-size: x-large;">'.$a->title.'</span>';
          }
          ?>
            <div class="item-footer ">
              <p class=" pt-2 pb-2 ">
                <a href="https://www.facebook.com/" aria-label="facebook" class="footer-medsos  pr-2 pl-2 text-white-50 font-italic"><i
                    class="fab  fa-facebook footer-medsos" style="font-size: 45px;" alt="facebook"></i></a>
                <a href="https://www.facebook.com/" aria-label="twitter"  class="footer-medsos  pr-2 pl-2 text-white-50 font-italic"><i
                    class="fab  fa-twitter-square footer-medsos" style="font-size: 45px;" alt="twitter"></i></a>
                <a href="https://www.facebook.com/" aria-label="youtube" class="footer-medsos  pr-2 pl-2 text-white-50 font-italic"><i
                    class="fab  fa-youtube-square footer-medsos" style="font-size: 45px;" alt="youtube"></i></a>
                <a href="https://www.facebook.com/" aria-label="instagram" class="footer-medsos  pr-2 pl-2 text-white-50 font-italic"><i
                    class="fab  fa-instagram footer-medsos" style="font-size: 45px;" alt="instagram"></i></a>
              </p>
            </div>
            <div class="  text-right" style="position:relative; right:50%;">
            <?php
            $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','hit')->get(); 
            foreach($agen as $a){
              echo '<span class="navbar-brand text-white-50 " style="font-size: large;font-weight:600; left:50%; ">'.$a->title.'</span>';
            }
                $tanggal = date('Y-m-d');
                $date = date('d-M-Y');
                $online = 0;
                $visitor=DB::table('visitors')->where('tanggal',$date)->get();
                if (isset($visitor)){
                  foreach($visitor as $data) { 
                    $online = $data->count;                    
                   } 
                } 
                  if( !isset($_COOKIE['visitor'])){
                    $duration = time()+60*24;
                    setcookie('visitor','visit',$duration);
                    if( $online != "0" ){
                      DB::table('visitors')->where('tanggal',$date)->increment('count', 1);
                    }else{
                      DB::insert('insert into visitors (count, date, tanggal) values (?, ?, ?)', [1, $tanggal, $date]);
                    }
                  }
                  $mo = '%'.date('M').'%';
                  //$mo = date('m');
                  //$mo = Carbon::now()->addMonth(1)->format('m');
                  $month = DB::table('visitors')->where('tanggal','like',$mo)->get()->sum('count');
                  //$month = DB::table('visitors')->where(DB::raw(MONTH('date')), $mo);


                  $count = DB::table('visitors')->get()->sum('count');
                  
                ?>
              <!-- <p class=" text-white-50  " style="font-size: 15px;">
                Hari &nbsp; : &nbsp;<span class=" font-weight-bold"> 120
              </p>
              <p class=" text-white-50 " style="font-size: 15px;">
                Bulan &nbsp;: &nbsp;<span class=" font-weight-bold">402
              </p> -->
              
              <p class=" text-white " style="font-size: 15px;">
                Online &nbsp; : &nbsp;<span class=" font-weight-bold">
                <?php 
                
                $visitor=DB::table('visitors')->where('tanggal',$date)->get();
                if (isset($visitor)){
                  foreach($visitor as $data) { 
                    $online = $data->count;
                    
                   } 
                }                
                 echo $online;
                ?>
              </p>
              <?php
              $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','bulan')->get(); 
              foreach($agen as $a){
                echo $a->title.' '.date('F');
              }?> &nbsp; : &nbsp;<span class=" font-weight-bold"><?php echo $month ?>
              </p>
              <p class=" text-white " style="font-size: 15px;">
                Total &nbsp; : &nbsp;<span class=" font-weight-bold"><?php echo $count ?>
              </p>
            </div>


          </div>
        </div>
      </div>
    </div>
    <div class=" mt-4 mb-0 pt-2 pb-2 ml-auto mr-auto"
      style="border-top: 1px solid rgba(204, 204, 204, 0.493);width: 90%;font-size: large;">
      <div class="row row-cols-2 row-cols-md-2">
        <div class="col">
          <p class=" d-inline text-white text-left ml-5">Copright
            © 2004-2020 BKKBN. All
            Rights Reserve</p>
        </div>
        <div class="col text-right" style="float:right">
          <p class=" d-inline text-white-50 text-right">
            <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo" class="text-white text-decoration-none">
            <?php
            $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','beranda')->get(); 
            foreach($agen as $a){
              echo $a->title;
            }
            $bahas=DB::table('languages')->where('id',$bahasa)->get(); 
            ?></a>
            @foreach($bahas as $b)
            <a href="/petasitus-{{$b->tag}}" class="text-white text-decoration-none">
            @endforeach
            <?php
            $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','peta')->get(); 
            foreach($agen as $a){
              echo $a->title;
            }
            ?>
            </a>
            <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo" class="text-white text-decoration-none">
            <?php
            $agen=DB::table('labels')->where('lang',$bahasa)->where('kondisi','kontak')->get(); 
            foreach($agen as $a){
              echo $a->title;
            }
            ?>
            <a href="mailto:bkkbn@gmail.com?subject=Subject atau judul disini&body=Pesan tulisan yang di tubuh disini" class="text-white text-decoration-none">EMAIL</a>
          </p>
        </div>
      </div>
    </div>


  </footer>

  <script src="/frontend/js/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
  </script>
  <script src="./frontend/bootstrap/js/bootstrap.js"></script>
  <script src="./frontend/js/bootstrap.bundle.min.js"
    integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
  </script>
  <script>
    if('serviceWorker' in navigator) {
        navigator.serviceWorker
            .register('/service-worker.js', { scope: '/' })
            .then(function(registration) {
                console.log('Service Worker Registered');
            });

        navigator.serviceWorker
            .ready
            .then(function(registration) {
                console.log('Service Worker Ready');
            });
    }
  </script>
  <script src="/frontend/js/moment.min.js"></script>
  <script src="/frontend/js/calender.js"></script>

</script>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var data = [
    <?php foreach($agenda as $a){ ?>
      {eventName: '{{$a->title}}', calendar: 'Work', color: 'orange', eventTime: moment("{{$a->tanggal}}")},
          <?php } ?>
  ];
  var calendar = new Calendar('#inicalendar', data);
});
</script>
</body>

</html>
