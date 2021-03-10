
@foreach ($categories as $category)
    <li class="nav-item">
        <a class="nav-link" href="{{ route('posts.category', $category) }}" style="font-size: 16px"> {{$category->name}}  </a>
    </li>
    
@endforeach