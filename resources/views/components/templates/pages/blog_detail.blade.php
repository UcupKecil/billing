@extends('components.templates.master')

@section('main-content')

    <main>
        <div id="content2">

                </div>



        </div>
        <aside>
            <article id="About">
                <h2>Berita Terkini</h2>
                <ul style="list-style:none" class="list-announ">
                    @php
                        $tar=DB::table('berita')->where('status','active')->orderBy('id','DESC')->limit(4)->get();
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
