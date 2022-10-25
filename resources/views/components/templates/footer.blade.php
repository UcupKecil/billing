


  <footer>

      <div class="footer-main">

          <div class="row">

             <div class="col-four tab-full mob-full footer-info">

               <h4>@foreach($set as $data) {!! html_entity_decode($data->short_des) !!} @endforeach</h4>

               <div class="card-body">
                 <a class="navbar-brand font-weight-bold text-white pb-2" style="font-size: xx-large;" href="#">NOPIN</a>
                 <p class=" text-white-50 pt-2 pb-2">@foreach($set as $data) {!! html_entity_decode($data->description) !!} @endforeach</p>
                 <p class=" pt-1 pb-1 " style="font-size: 15px;">
                   <span class="fa fa-map-marker-alt" style="font-size: 20px;color: #1976d2;"></span>&nbsp;
                   @foreach($set as $data) {{$data->address}} @endforeach
                 </p>
                 <p class=" pt-1 pb-1 " style="font-size: 15px;">
                   <span class="fa fa-phone fa-flip-horizontal " style="font-size: 20px;color: #1976d2;"></span>&nbsp;
                   @foreach($set as $data) {{$data->phone}} @endforeach
                 </p>
                 <p class=" pt-1 pb-1 " style="font-size: 15px;">
                   <span class="fa fa-envelope" style="font-size: 20px;color: #1976d2;"></span>&nbsp;
                   @foreach($set as $data) {{$data->email}} @endforeach
                 </p>
                 <p class=" pt-1 pb-1 " style="font-size: 15px;">
                   <span class="fa fa-clock" style="font-size: 20px;color: #1976d2;"></span>&nbsp; @foreach($set as $data) {{$data->layanan}} @endforeach
                 </p>
               </div>

             </div> <!-- end footer-info -->

             <div class="col-two tab-1-3 mob-1-2 site-links">

                 <h4>Site Links</h4>

                 <ul>
                     <li><a href="#">About Us</a></li>
                       <li><a href="#">Blog</a></li>
                       <li><a href="#">FAQ</a></li>
                       <li><a href="#">Terms</a></li>
                       <li><a href="#">Privacy Policy</a></li>
                   </ul>

             </div> <!-- end site-links -->

             <div class="col-two tab-1-3 mob-1-2 social-links">

                 <h4>Social</h4>

                 <ul>
                     <li><a href="#">Twitter</a></li>
                       <li><a href="#">Facebook</a></li>
                       <li><a href="#">Dribbble</a></li>
                       <li><a href="#">Google+</a></li>
                       <li><a href="#">Instagram</a></li>
                   </ul>

             </div> <!-- end social links -->

             <div class="col-four tab-1-3 mob-full footer-subscribe">

                 <h4>Subscribe</h4>

                 <a href="" class="text-white text-decoration-none">
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

                 <div class="subscribe-form">

                     <form id="mc-form" class="group" novalidate="true">

                           <input type="email" value="" name="dEmail" class="email" id="mc-email" placeholder="Type &amp; press enter" required="">

                          <input type="submit" name="subscribe" >

                          <label for="mc-email" class="subscribe-message"></label>

                       </form>

                 </div>

             </div> <!-- end subscribe -->

         </div> <!-- end row -->

      </div> <!-- end footer-main -->

     <div class="footer-bottom">
         <div class="row">

             <div class="col-twelve">
                 <div class="copyright">
                    <span>© Copyright Abstract 2016</span>
                    <span>Design by <a href="http://www.styleshout.com/">styleshout</a></span>
                </div>

                <div id="go-top">
                   <a class="smoothscroll" title="Back to Top" href="#top"><i class="icon icon-arrow-up"></i></a>
                </div>
             </div>

         </div>
     </div> <!-- end footer-bottom -->

  </footer>
