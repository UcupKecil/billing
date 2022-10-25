@extends('frontend.include.master')

@section('main-content')

    <main>
        <div id="content2">
            @foreach($pages as $p)
                <h2>{{$p->title}}</h2>
                <br></br>


                <div  style="width:100%;">
                <?php echo $p->text; ?>

                </div>
                @endforeach
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
