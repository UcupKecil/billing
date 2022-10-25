@extends('components.templates.master')


@section('title','PORTAL BERITA || Blog Detail page')

@section('main-content')





        <!-- content
        ================================================== -->
        <section id="content-wrap" class="blog-single">
         <div class="row">
           <div class="col-twelve">

             <article class="format-standard">

               <div class="content-media">
                 <div class="post-thumb">
                   <img src="{{ asset('/photo_berita').'/'.$post->photo }}" alt="{{$post->title}}">
                 </div>
               </div>

               <div class="primary-content">

                 <h1 class="page-title">{{$post->title}}</h1>

                 <ul class="entry-meta">
      							<li class="date">{{$post->created_at}}</li>
      							<li class="cat"><a href="">By {{$post->author_info['name']}}</a></li>
      						</ul>




                 <h2>{!! html_entity_decode($post->summary) !!}</h2>
                 <blockquote><p>{!! html_entity_decode($post->quote) !!}</p></blockquote>

      						<p>{!! html_entity_decode($post->description) !!}</p>





               </div> <!-- end entry-primary -->



             </article>


           </div> <!-- end col-twelve -->
         </div> <!-- end row -->



        </section> <!-- end content -->



    <!--/ End Blog Single -->
@endsection
@push('styles')
<script type='text/javascript' src='https://platform-api.sharethis.com/js/sharethis.js#property=5f2e5abf393162001291e431&product=inline-share-buttons' async='async'></script>
@endpush
@push('scripts')

@endpush
