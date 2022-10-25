<!DOCTYPE html>
<html >
<?php
    // foreach($ba as $b){
    //   $bahasa = $b->id;
    // }

    $bahasa=2;
    //$lang = DB::table('languages')->where('status','active')->get();
?>
@include('components.templates.head')

<!-- <body id="page-top"> -->
<body>
<div style="position:fixed;left:20px;bottom:20px;z-index:9;float:left;">
  <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo">
  <button style="background:transparant;float:left;width:10%;height:50%;border-radius:5px">
  <img src="https://tochat.be/whatsapp-icon-green.jpg" width="100%" height="100%" alt="wa"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
  <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
</svg></button></a>
  </div>
  <!-- Page Wrapper -->
  <!-- <div id="wrapper"> -->
  <?php
      // foreach($ba as $b){
      //   $bahasa = $b->id;
      // }

      $set=DB::table('settings')->where('lang',$bahasa)->get();
      $lang = DB::table('languages')->where('status','active')->get();
  ?>

    <!-- Content Wrapper -->
    <!-- <div id="content-wrapper" class="d-flex flex-column"> -->

      <!-- Main Content -->
      <!-- <div id="content"> -->

        <!-- Topbar -->
        <!--  -->
        @include('components.templates.header_baru')
        <!-- End of Topbar -->

        <!-- Begin Page Content -->
        @yield('main-content')
        <!-- /.container-fluid -->

        <section id="bricks">

        	<div class="row masonry">

        		<!-- brick-wrapper -->
              <div class="bricks-wrapper">

              	<div class="grid-sizer"></div>

              	<div class="brick entry featured-grid animate-this">
              		<div class="entry-content">
              			<div id="featured-post-slider" class="flexslider">
                      @php

                          $berita_lists=  DB::table('beritas')
                                ->join('kategori_beritas', 'beritas.post_cat_id', '=', 'kategori_beritas.id')
                                ->join('users', 'beritas.added_by', '=', 'users.id')
                                ->select([
                                    'beritas.*', 'kategori_beritas.title as kategori','users.name as penulis'
                                ])
                                ->where('beritas.lang',$bahasa)->where('beritas.status','active')->orderBy('beritas.id','DESC')->limit(10)->get();
                      @endphp
                      @foreach($berita_lists as $berita)


     			   			<ul class="slides">
                                 <!--Logika perulangan sesuai banyaknya berita utama dari database-->
     				   			<li><!-- /slide -->
     				   				<div class="featured-post-slide">

     						   			<div class="post-background" style="background-image:url({{ asset('/photo_berita').'/'.$berita->photo }});"></div>


     								   	<div class="overlay"></div>

     								   	<div class="post-content">
     								   		<ul class="entry-meta">
     												<li>{{$berita->created_at}}</li>
     												<li><a href="" >{{$berita->penulis}}</a></li>
     											</ul>



     								   		<h1 class="slide-title"><a href="{{route('blog.detail',$berita->slug)}}" title="">{{$berita->title}}</a></h1>
                            <a href="{{route('blog.detail',$berita->slug)}}" class="more-btn">Continue Reading</a>
     								   	</div>


     				   				</div>
     				   			</li>
                      @endforeach
     				   		</ul> <!-- end slides -->


     				   	</div> <!-- end featured-post-slider -->
              		</div> <!-- end entry content -->

              	</div>

     <!-- end article -->
     @php

         $berita_lists=  DB::table('beritas')
               ->join('kategori_beritas', 'beritas.post_cat_id', '=', 'kategori_beritas.id')
               ->join('users', 'beritas.added_by', '=', 'users.id')
               ->select([
                   'beritas.*', 'kategori_beritas.title as kategori','users.name as penulis'
               ])
               ->where('beritas.lang',$bahasa)->where('beritas.status','active')->orderBy('beritas.id','DESC')->limit(10)->get();
     @endphp
     @foreach($berita_lists as $berita)
                         <!--Logika perulangan sesuai banyaknya berita  dari database-->
                     <article class="brick entry format-gallery group animate-this">

                         <div class="entry-thumb">

                            <div class="post-slider flexslider">
                                      <ul class="slides">
                                          <li>
                                              <img src="{{ asset('/photo_berita').'/'.$berita->photo }}" alt="Foto berita" class="img" width=80 height="80">
                                          </li>
                                      </ul>
                                  </div>

                         </div>
                         <div class="entry-text">
                             <div class="entry-header">



                                 <h1 class="entry-title"><a href="{{route('blog.detail',$berita->slug)}}">{{$berita->title}}</a></h1>

                             </div>
                                  <div class="entry-excerpt">

                                      {!! html_entity_decode($berita->description) !!}
                         </div>

                     </article>
  @endforeach
              </div> <!-- end brick-wrapper -->

        	</div> <!-- end row -->


        	<div class="row">

        		<nav class="pagination">
     		      <span class="page-numbers prev inactive">Prev</span>
     		   	<span class="page-numbers current">1</span>
     		   	<a href="#" class="page-numbers">2</a>
     		      <a href="#" class="page-numbers">3</a>
     		      <a href="#" class="page-numbers">4</a>
     		      <a href="#" class="page-numbers">5</a>
     		      <a href="#" class="page-numbers">6</a>
     		      <a href="#" class="page-numbers">7</a>
     		      <a href="#" class="page-numbers">8</a>
     		      <a href="#" class="page-numbers">9</a>
     		   	<a href="#" class="page-numbers next">Next</a>
     	      </nav>

        	</div>

        </section>

      <!-- </div> -->
      <!-- End of Main Content -->
      @include('components.templates.footer')
      <div id="preloader">
         <div id="loader"></div>
      </div>

      <script src="{{ asset('js') }}/jquery-2.1.3.min.js"></script>
      <script src="{{ asset('js') }}/plugins.js"></script>
      <script src="{{ asset('js') }}/jquery.appear.js"></script>
      <script src="{{ asset('js') }}/main.js"></script>


</body>

</html>
