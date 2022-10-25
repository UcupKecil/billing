<!DOCTYPE html>
<html >
<?php
    // foreach($ba as $b){
    //   $bahasa = $b->id;
    // }

    $bahasa=2;
    //$lang = DB::table('languages')->where('status','active')->get();
?>
@include('components.templates.frontend.include.head')

<!-- <body id="page-top"> -->
<body>
<div style="position:fixed;right:20px;bottom:20px;z-index:9;float:right;">
  <a href="https://api.whatsapp.com/send?phone=+628123456789&text=Halo">
  <button style="background:transparant;float:right;width:10%;height:50%;border-radius:5px">
  <img src="./frontend/images/wa.png" width="100%" height="100%" alt="wa"></button></a>
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
        @include('components.templates.frontend.include.header_baru')
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
     			   			<ul class="slides">
                                 <!--Logika perulangan sesuai banyaknya berita utama dari database-->
     				   			<li><!-- /slide -->
     				   				<div class="featured-post-slide">

     						   			<div class="post-background" style="background-image:url('images/thumbs/featured/featured-1.jpg');"></div>

     								   	<div class="overlay"></div>

     								   	<div class="post-content">
     								   		<ul class="entry-meta">
     												<li>September 06, 2016</li>
     												<li><a href="" >Naruto Uzumaki</a></li>
     											</ul>

     								   		<h1 class="slide-title"><a href="single-standard.html" title="">Minimalism Never Goes Out of Style</a></h1>
     								   	</div>

     				   				</div>
     				   			</li>
     				   		</ul> <!-- end slides -->
     				   	</div> <!-- end featured-post-slider -->
              		</div> <!-- end entry content -->
              	</div>

     <!-- end article -->
                         <!--Logika perulangan sesuai banyaknya berita  dari database-->
                     <article class="brick entry format-gallery group animate-this">

                         <div class="entry-thumb">

                            <div class="post-slider flexslider">
                                      <ul class="slides">
                                          <li>
                                              <img src="images/thumbs/gallery/work1.jpg">
                                          </li>
                                      </ul>
                                  </div>

                         </div>
                         <div class="entry-text">
                             <div class="entry-header">

                                 <div class="entry-meta">
                                     <span class="cat-links">
                                         <a href="#">Branding</a>
                                         <a href="#">Wordpress</a>
                                     </span>
                                 </div>

                                 <h1 class="entry-title"><a href="single-gallery.html">Workspace Design Trends and Ideas.</a></h1>

                             </div>
                                  <div class="entry-excerpt">
                                      Lorem ipsum Sed eiusmod esse aliqua sed incididunt aliqua incididunt mollit id et sit proident dolor nulla sed commodo est ad minim elit reprehenderit nisi officia aute incididunt velit sint in aliqua cillum in consequat consequat in culpa in anim.
                                  </div>
                         </div>

                     </article>

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
      @include('components.templates.frontend.include.footer')
      <div id="preloader">
         <div id="loader"></div>
      </div>
      <script src="js/jquery-2.1.3.min.js"></script>
      <script src="js/plugins.js"></script>
      <script src="js/jquery.appear.js"></script>
      <script src="js/main.js"></script>
</body>

</html>
