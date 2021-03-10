@props(['post'])
<div class="card shadow mb-5 bg-white rounded" >                   
    @if ($post->image)
        <img class="card-img-top" src="{{Storage::url($post->image->url)}}" alt=""  style= "width: 100%; height: 40vh; object-fit: cover;">
    @else
    <img class="card-img-top" src="https://cdn.pixabay.com/photo/2021/01/05/06/40/boat-5889919_960_720.png" alt=""  style= "width: 100%; height: 40vh;">
    @endif
    <div class="card-body">
        <h5 class="card-title">
            <a href="{{route('posts.show', $post)}}" class="text-dark text-decoration-none">
                {{$post->name}}
            </a>
        </h5>
        <p class="card-text text-secondary">{!!$post->extract!!}</p>
        @foreach ($post->tags as $tag)           
            <a href="{{route('posts.tag', $tag)}}" class="badge badge-pill badge-info text-white text-decoration-none" style="font-size:13px">
                {{$tag->name}}
            </a>           
        @endforeach
        {{-- <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p> --}}
    </div> 
</div>