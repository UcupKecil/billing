@extends('frontend.include.master')

@section('main-content')

    <main>
        <div id="content2">
                <table>
                @foreach($post as $p)
                    <tr background-color="#ccc">
                        <td width="30px">Judul</td>
                        <td >:</td>
                        <td>{{$p->title}}</td>
                    </tr>
                    <tr >
                        <td width="30px">Tanggal</td>
                        <td width="5px">:</td>
                        <td>{{$p->tanggal}}</td>
                    </tr>
                    <tr background-color="#ccc">
                        <td width="30px">Link</td>
                        <td >:</td>
                        <td><a href="{{$p->link}}">{{$p->link}}</a></td>
                    </tr>
                    <tr></tr>
                
                </table>
                <?php 
                    if($p->file != ""){
                    echo '<li type="square" style="margin-left:20%;" ><span>'.$p->desfile.' <a href="'.$p->file.'" class="pengbut">link button</a></span></li>';
                    }
                ?>
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
