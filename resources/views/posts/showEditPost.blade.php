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
    @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{ route('posts.doEditPost', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <label>Título:
            <input type="text" name='title' value="{{ old('title',$post->title) }}">
        </label>
        @error('title')
            <p>{{ $message }}</p>
        @enderror
        <br><br>
        <label>Categoría:
            <input type="text" name='category' value="{{ old('category',$post->category) }}">
        </label>
        @error('category')
            <p>{{ $message }}</p>
        @enderror
        <br><br>
        <label>Contenido:
            <textarea name="content">{{ old('content',$post->content) }}</textarea>
        </label>
        @error('content')
            <p>{{ $message }}</p>
        @enderror
        <br><br>
        <label>Slug:
            <input type="text" name='slug' value="{{ old('slug',$post->slug) }}">
        </label>
        @error('slug')
            <p>{{ $message }}</p>
        @enderror
        <br><br>
        <button type="submit">Editar post</button>
    </form>
</body>

</html>
