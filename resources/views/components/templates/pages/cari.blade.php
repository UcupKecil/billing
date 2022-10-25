@extends('frontend.include.master')

@section('main-content')

    <main>
        <div id="content2">

            @foreach($posts as $post)

                  <div style="height:20%; margin-bottom:30px;">

                    <img src="{{$post->photo}}" class=" float-left mt-4 ml-5 mr-3 position-relative" width="20%"
                      height="100%" alt="">
                      <div class="mt-4 position-relative text-black" style="max-width: 70%;margin-left: 280px;">
                        <a href="{{$post->slug}}" class="h5 text-decoration-none">{{$post->title}}</a>
                        <p style="font-size: 15px; " class=" text-black-50">{{$post->tanggal}}</p>
                        <p class="harga"><?php echo \Illuminate\Support\Str::limit(strip_tags($post->description), 300, $end='...') ?></p>
                        <a href="{{$post->slug}}" class=" font-weight-bold text-warning position-relative "
                          style="margin-left: auto;margin-right: auto;">Baca
                          Selengkapnya</a>
                      </div>

                  </div>
                  </br>
            @endforeach
            {!! $posts->links() !!}
            <?php /*
            <?php foreach ($user as $u): ?>
              <p>{{$u->name}}</p>
            <?php endforeach; ?>
            {!! $user->links() !!}*/?>
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
                </ul>
            </article>
        </aside>
    </main>
@endsection

</html>
