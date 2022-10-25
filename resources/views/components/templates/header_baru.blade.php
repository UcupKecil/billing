


  <header class="short-header">

     	<div class="gradient-block"></div>

     	<div class="row header-content">

     		<div class="logo">
  	         <a href="index.html">Author</a>
  	      </div>

  	   	<nav id="main-nav-wrap">
  				<ul class="main-navigation sf-menu">
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

                    <li class="current">
                      <a href="{{$link}}" class="parent dropdown-toggle">{{$m->title}}</a>
                        <ul class="block-sub">
              <?php
              }
              else{?>

                  <li class="current">
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

                      <li class="current">
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
