@extends('layouts.app')

@section('content')
<div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-2 g-lg-3">
    {{-- <div class="row row-cols-3">   --}}
        @foreach ($posts as $post)
            <div class="col @if($loop->first)col-lg-8 col-sm-12 @endif">
                <div class="p-2">
                    <article style = "background-image: url(@if($post->image) {{Storage::url($post->image->url) }} @else https://cdn.pixabay.com/photo/2021/01/05/06/40/boat-5889919_960_720.png @endif); width: 100%; height: 35vh; background-size: cover; background-position: center;">
                    {{-- <article style = "background-image: url({{Storage::url($post->image->url) }}); width: 100%; height: 35vh; background-size: cover; background-position: center;"> --}}
                        {{-- <img class="img-fluid" src="{{Storage::url($post->image->url) }}" alt=""> --}}
                        <div class="card text-white">
                            <div class="card-img-overlay">
                                <h5 class="card-title mt-1">
                                    <p class="font-weight-bolder" >                                    
                                        <a href="{{route('posts.show', $post)}}" class="text-white text-decoration-none">
                                            {{$post->name}}
                                        </a>                         
                                    </p>
                                </h5>
                                <p class="card-text">
                                    <div>
                                        @foreach ($post->tags as $tag)                                            
                                            <a href="{{route('posts.tag', $tag)}}" class="badge badge-pill badge-secondary text-white text-decoration-none" style="font-size: 13px">
                                                {{$tag->name}}
                                            </a>                                                                                        
                                        @endforeach
                                    </div>
                                </p>
                            </div>
                        </div>                        
                    </article>
                </div>
            </div>
        @endforeach           
</div>
<div class="p-3">
    {{$posts->links()}}
</div>

@endsection
