<header>
  <div class="container-fluid p-0">
      <div class="nav top-toolbar row">
        <div class=" ml-2 text-white p-2 pb-0 col-7">
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
    <nav class="navbar navbar-expand-sm  container-fluid navbar-light">
        <div class="navbar-header" style="margin-bottom:5px">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
          </button>
          <a class="navbar-brand text-right" href="https://bkkbn.jagadcreative.id/">
          @foreach($set as $h)
            <img src="{{$h->logo}}" class=" img-resimg-responsive img-rounded" height="52px" width="120px" alt="logo">
            @endforeach
          </a>
        </div>
        <div class="collapse navbar-collapse bg-white"id="navbarNav" style="z-index:80">
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

                    <li>
                      <a href="{{$link}}" class="parent dropdown-toggle">{{$m->title}}</a>
                        <ul class="block-sub">
              <?php
              }
              else{?>
              
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

                      <li>
                        <a href="{{$link}}" class="sub-cild dropdown-toggle">{{$b->title}}</a>
                          <ul class="block-sub block-sub2">

                  <?php
                  }else{?>

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


    </div>
  </header>

  <header class="short-header">

     	<div class="gradient-block"></div>

     	<div class="row header-content">

     		<div class="logo">
  	         <a href="index.html">Author</a>
  	      </div>

  	   	<nav id="main-nav-wrap">
  				<ul class="main-navigation sf-menu">
  					<li class="current"><a href="{{url('/')}}" title="Portal Berita">Home</a></li>
                      <li class="has-children current">
  						<a href="{{url('/')}}" title="">Kategori Berita</a>
  						<ul class="sub-menu">
                              <!--foreach ambil dari database-->
                              <li><a href="#" title=""></a></li>
                          </ul>
                      </li>
                      <li class="has-children current">
  						<a href="{{url('/')}}" title="">Pengelola</a>
  						<ul class="sub-menu">
                          <li><a href="{{url('/login')}}" title="">Login</a></li>
                          <li><a href="{{url('/register')}}" title="">Daftar</a></li>
                      </li>
  			    </ul>


  				</ul>
  			</nav> <!-- end main-nav-wrap -->

  			<div class="search-wrap">

  				<form role="search" method="get" class="search-form" action="#">
  					<label>
  						<span class="hide-content">Search for:</span>
  						<input type="search" class="search-field" placeholder="Type Your Keywords" value="" name="s" title="Search for:" autocomplete="off">
  					</label>
  					<input type="submit" class="search-submit" value="Search">
  				</form>

  				<a href="#" id="close-search" class="close-btn">Close</a>

  			</div> <!-- end search wrap -->

  			<div class="triggers">
  				<a class="search-trigger" href="#"><i class="fa fa-search"></i></a>
  				<a class="menu-toggle" href="#"><span>Menu</span></a>
  			</div> <!-- end triggers -->

     	</div>

     </header>
