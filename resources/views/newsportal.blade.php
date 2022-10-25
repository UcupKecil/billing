
<!DOCTYPE html>
<!--[if IE 8 ]><html class="no-js oldie ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]><html class="no-js oldie ie9" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html class="no-js" lang="en"> <!--<![endif]-->

    @include('components.templates.head')

<body id="top">

	<!-- header
   ================================================== -->
    <!-- end header -->

        @include('components.templates.header')
   <!-- masonry
   ================================================== -->
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

   </section> <!-- end bricks -->


   <!-- footer
   ================================================== -->

   @include('components.templates.footer')
   <div id="preloader">
    	<div id="loader"></div>
   </div>

   <!-- Java Script
   ================================================== -->
   <script src="js/jquery-2.1.3.min.js"></script>
   <script src="js/plugins.js"></script>
   <script src="js/jquery.appear.js"></script>
   <script src="js/main.js"></script>

</body>

</html>
