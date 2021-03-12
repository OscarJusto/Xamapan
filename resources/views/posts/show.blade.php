@extends('layouts.app')

@section('scripts')    
    <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v10.0" nonce="Ph18g3Tw"></script>
@endsection

@section('content')

    <h3 class="">{{$post->name}}</h3>
    <div>
        <p class="lead text-justify text-secondary">
            {!!$post->extract!!}
        </p>
    </div>
    <div class="row row-cols-1 row-cols-md-1 row-cols-lg-3 g-2 g-lg-3">
        <div class="col col-lg-8 col-sm-12">
            <figure>
                @if ($post->image)
                    <img src="{{Storage::url($post->image->url) }}" alt="" style= "width: 100%; height: 50vh;">
                @else
                <img src="https://cdn.pixabay.com/photo/2021/01/05/06/40/boat-5889919_960_720.png" alt="" style= "width: 100%; height: 50vh;">                    
                @endif
            </figure>
            <div>
                <p class="lead text-secondary text-justify">
                {!!$post->body!!}
                </p>
            </div>
        </div>  
        <div class="col col-lg-4 col-md-12 col-sm-12">
            <aside>
                <h3> Más en {{$post->category->name}} </h3>
                    @foreach ($similares as $similar)
                            <div class="row no-gutters mb-1">
                                <div class="col-4 align-self-center">
                                    <a href="{{route('posts.show', $similar)}}">
                                        @if ($similar->image)
                                            <img class="img-fluid" src="{{Storage::url($similar->image->url) }}" alt="">
                                        @else
                                        <img class="img-fluid" src="https://cdn.pixabay.com/photo/2021/01/05/06/40/boat-5889919_960_720.png" alt="">
                                        @endif
                                    </a>
                                </div>
                                    {{-- <a href="{{route('posts.show', $similar)}}">
                                        <img src="{{Storage::url($similar->image->url) }}" alt="" style= "width: 2rem, height: 5rem; ;">

                                    </a> --}}
                                <div class="col-8 align-self-center">
                                    <div class="card-body" style="padding: 0px 0px 0px 10px;">
                                        <p class="card-text">{{$similar->name}}</p>                                
                                        
                                        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
                                    </div>
                                </div>
                            </div>  
                    @endforeach
            </aside>
        </div>

    </div>
    <div id="fb-root"></div>
    <div class="fb-comments" data-href="http://xamapan.test/posts/{{$post->id}}" data-width="100%" data-numposts="30" data-mobile></div>

@endsection


