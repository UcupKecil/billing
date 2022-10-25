@extends('frontend.include.master')

@section('main-content')
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
              $pengumuman_lists=DB::table('posts')->where('lang',$bahasa)->where('status','active')->where('post_cat_id','16')->orderBy('id','ASC')->limit(4)->get();
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
   
  <script src="/frontend/js/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
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
@endsection


</html>
