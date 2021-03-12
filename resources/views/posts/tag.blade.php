@extends('layouts.app')

@section('content')
    <h4 class="text-uppercase text-center font-weight-bold">Etiqueta: {{$tag->name}}</h4>

    <div class="row g-2 g-lg-4">
        <div class="col">
            
        </div>
        <div class="col-10">
            @foreach ($posts as $post)
                <x-card-post :post="$post" />
            @endforeach
            <div class="p-3">
                {{$posts->links()}}
            </div>
        </div>    
        <div class="col">
            
        </div>

    </div>


@endsection