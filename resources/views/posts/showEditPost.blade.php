<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Post</title>
</head>
<body>
    <h1>Formulario para editar un post</h1>
    <form action="{{route('posts.doEditPost', $post->id)}}" method="POST">
        @csrf
        @method('PUT')
        <label>Título: 
            <input type="text" name='title' value="{{$post->title}}">
        </label>
        <br><br>
        <label>Categoría: 
            <input type="text" name='category' value="{{$post->category}}">
        </label>
        <br><br>
        <label>Contenido: 
            <textarea name="content">{{$post->content}}</textarea>
        </label>
        <br><br>
        <button type="submit">Editar post</button>
    </form>
</body>
</html>