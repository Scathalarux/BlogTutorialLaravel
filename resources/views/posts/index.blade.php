<x-app-layout>
    <h1 class="text-2xl">Aquí se mostrarán todos los posts</h1>

    {{-- Enlace a crear post nuevo --}}
    <a href="{{route('posts.showAddPost')}}">Nuevo post</a>

    {{-- Mostrar la lista de posts --}}
    <ul>
        @foreach ($posts as $post)
        <li>
            {{-- <a href="{{route('posts.getPost', $post->id)}}">
                {{$post->title}}
            </a> --}}
            {{-- Si no introducimos el campo, interpretará que queremos el ID --}}
            <a href="{{route('posts.getPost', $post)}}">
                {{$post->title}}
            </a>
        </li>  
        @endforeach
    </ul>
    {{-- Mostramos la paginación --}}
    {{$posts->links()}}
</x-app-layout>
