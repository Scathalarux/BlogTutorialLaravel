<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Añadir Post</title>
</head>
<body>
    <h1>Formulario para crear un post</h1>
    <form action="{{route('posts.doAddPost')}}" method="POST">
        @csrf
        <label>Título: 
            <input type="text" name='title'>
        </label>
        <br><br>
        <label>Categoría: 
            <input type="text" name='category'>
        </label>
        <br><br>
        <label>Contenido: 
            <textarea name="content"></textarea>
        </label>
        <br><br>
        <label>Slug: 
            <input type="text" name='slug'>
        </label>
        <br><br>
        <button type="submit">Crear post</button>
    </form>
</body>
</html>