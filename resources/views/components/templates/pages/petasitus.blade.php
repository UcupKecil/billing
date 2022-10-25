@extends('frontend.include.master')

@section('main-content')

    <main>
        <div id="content2">
            <h2>Peta Situs</h2>
            <!-- <div>
            <ul type="disc">
                <li><p>pertama</p></li>
                <br>
                    <ul type="circle" style="margin-left:2%;">
                        <li>Kedua sdsd
                            <ul type="square" style="margin-left:2%;">
                                <li>Ketiga
                                    <ul type="square" style="margin-left:2%;">
                                        <li>Keempat</li>
                                    </ul>
                                </li>
                                <li>Ketiga</li>
                            </ul>
                        </li>
                        <li>kedua</li>
                    </ul>
                </li>
                <li>pertama</li>
            </ul>
          </div>
          <br></br> -->
            <ul type="disc">
          <!-- PARENT PERTAMA -->
          @php
            $menu=DB::table('menus')->where('group_id','2')->where('lang',$bahasa)->get();
        @endphp
            <!-- PARENT PERTAMA -->
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
                  <a href="#">{{$m->title}} </a></li><br>
                    <ul type="circle" style="margin-left:2%;">
              <?php
              }
              else{?>
                <li>
                  <a href="{{$link}}">{{$m->title}} </a></li><br>
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
                      <li>
                        <a href="#">{{$b->title}}</a></li><br>
                          <ul type="square" style="margin-left:2%;">
                  <?php
                  }else{?>
                    <!--<ul class="dropdown-menu" aria-labelledby="dropdown1" style="min-width: 200px;">-->
                      <li>
                        <a  href="{{$link}}">{{$b->title}}</a></li><br>
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
                          <li >
                          <a href="{{$link}}">{{$c->title}}</a></li><br>
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
        <aside>
            <article id="About">
                <h2>Berita Terkini</h2>
                <ul style="list-style:none" class="list-announ">
                    @php
                        $tar=DB::table('posts')->where('status','active')->where('lang',$bahasa)->orderBy('id','DESC')->limit(4)->get();
                    @endphp
                    @foreach($tar as $t)
                    <li>
                            <a href="{{$t->slug}}" target="_blank" title="">
                            <div class="list-news">{{$t->title}}</div>
                            </a>
                    </li>
                    <br></br>
                    @endforeach
                </ul>
            </article>
        </aside>
    </main>
    @endsection

</html>
