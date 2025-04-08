<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Post</title>
</head>

<body>
    {{-- <h1>Aquí se mostrará el contenido del post <?php echo $post ?></h1> --}}
    {{-- <h1>Aquí se mostrará el contenido del post <?= $post ?></h1> --}}
    <a href="{{route('posts.index')}}">Volver a posts</a>
    
    <h1>Título: {{ $post->title }}</h1>
    <p>
        <strong>Categoría: </strong>{{$post->category}}
    </p>
    <p>
        {{$post->content}}
    </p>

    <a href="{{route('posts.showEditPost', $post->id)}}">Editar post</a>
    <form action="{{route('posts.deletePost',$post->id)}}" method="POST">
        @csrf
        @method('DELETE')
        <button type="submit">Eliminar post</button>
    </form>
    
</body>

</html>
