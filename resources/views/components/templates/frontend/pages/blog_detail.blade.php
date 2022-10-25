@extends('frontend.include.master')

@section('main-content')

    <main>
        <div id="content2">
            @foreach($post as $p)
                <h2>{{$p->title}}</h2>

                        <?php
                        $d = $p->added_by;
                        $catd=DB::table('users')->where('id',$d)->get();
                        ?>

                        {{$p->tanggal}}

                    </section>| <a id="category" href="" # style="text-decoration: none; color: black;">
                        <?php
                        $c = $p->post_cat_id;
                        $cat=DB::table('post_categories')->where('id',$c)->get();
                        ?>
                        @foreach($cat as $bn)
                        {{$bn->title}}</a>| <section id="respond" class=" d-inline">
                        @endforeach
                </p>
                <img src="{{$p->photo}} " alt="suhu" style=" width:100%">

                <div class="deskripsi" style="font-size:25px; font-weight:20px;">
                    <!--<p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, beatae!
                        Recusandae
                        amet,
                        similique, incidunt autem, dicta neque inventore est optio quidem soluta delectus at maxime?
                        Numquam
                        vel culpa aliquam atque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ipsa
                        exercitationem dolor totam accusantium cum quisquam assumenda at ratione autem consequatur
                        cumque,
                        aperiam similique excepturi maiores quia. Magni, fuga tempora. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Saepe temporibus, sit amet doloremque odio unde, optio quia
                        dolores
                        natus ipsa ad cum facilis magni. Cupiditate dolorem numquam eum doloremque voluptatum?</p>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Officia, beatae!
                        Recusandae
                        amet,
                        similique, incidunt autem, dicta neque inventore est optio quidem soluta delectus at maxime?
                        Numquam
                        vel culpa aliquam atque. Lorem, ipsum dolor sit amet consectetur adipisicing elit. Eos ipsa
                        exercitationem dolor totam accusantium cum quisquam assumenda at ratione autem consequatur
                        cumque,
                        aperiam similique excepturi maiores quia. Magni, fuga tempora. Lorem ipsum dolor sit amet
                        consectetur adipisicing elit. Saepe temporibus, sit amet doloremque odio unde, optio quia
                        dolores
                        natus ipsa ad cum facilis magni. Cupiditate dolorem numquam eum doloremque voluptatum?</p>
                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Itaque, nihil ipsam,
                        amet
                        earum in nam
                        error, at provident ut tenetur recusandae? Placeat amet sed deserunt. Explicabo ducimus ratione
                        nobis consequatur.</p>-->
                        <?php echo $p->description; ?>
@endforeach
                </div>


            <!--
            <article class="box box-comment">
                <h2>Comment</h2>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="styled-input wide">
                            <input type="text" required />
                            <label>Name</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="styled-input">
                            <input type="text" required />
                            <label>Email</label>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-12">
                        <div class="styled-input" style="float:right;">
                            <input type="text" required />
                            <label>Phone Number</label>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="styled-input wide">
                            <textarea required></textarea>
                            <label>Message</label>
                        </div>
                    </div>
                    <div class="col-xs-12">
                        <div class="btn-lrg submit-btn mt-4">Send Message</div>
                    </div>
                </div>
            </article>-->
        </div>
        <aside>
            <article id="About">
                <h2>Berita Terkini</h2>
                <ul style="list-style:none" class="list-announ">
                    @php
                        $tar=DB::table('posts')->where('status','active')->orderBy('id','DESC')->limit(4)->get();
                    @endphp
                    @foreach($tar as $t)
                    <li>
                        <a href="" target="_blank" title="">
                            <div class="list-news">{{$t->title}}</div>
                        </a>
                    </li>
                    @endforeach
                    <!--<li>
                        <a href="" target="_blank" title="">
                            <div class="list-news">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" title=" ">
                            <div class="list-news">Lorem ipsum dolor sit amet consectetur </div>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" title=" ">
                            <div class="list-news">Lorem ipsum dolor sit amet consectetur adipisicing elit</div>
                        </a>
                    </li>
                    <li>
                        <a href="" title=" ">
                            <div class="list-news">Lorem ipsum dolor sit amet consectetur adipisicing </div>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" title="">
                            <div class="list-news">Lorem ipsum dolor sit </div>
                        </a>
                    </li>
                    <li>
                        <a href="" target="_blank" title="">
                            <div class="list-news">Lorem ipsum dolor sit amet t</div>
                        </a>
                    </li>-->

                </ul>
            </article>
        </aside>
    </main>
    @endsection

</html>
