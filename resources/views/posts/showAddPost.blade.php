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
    {{-- Alternativa 1 para mostrar los errores --}}
    {{-- @if ($errors->any())
        <div>
            <h2>Errores:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif --}}

    <form action="{{ route('posts.doAddPost') }}" method="POST">
        @csrf
        <label>Título:
            <input type="text" name='title' value="{{old('title')}}">
        </label>
        {{-- Alternativa 2 para mostrar los errores --}}
        @error('title')
            <p>{{$message}}</p>
        @enderror
        <br><br>

        <label>Categoría:
            <input type="text" name='category' value="{{old('category')}}">
        </label>
        @error('category')
            <p>{{$message}}</p>
        @enderror
        <br><br>

        <label>Contenido:
            <textarea name="content">{{old('content')}}</textarea>
        </label>
        @error('content')
            <p>{{$message}}</p>
        @enderror
        <br><br>

        <label>Slug:
            <input type="text" name='slug' value="{{old('slug')}}">
        </label>
        @error('slug')
            <p>{{$message}}</p>
        @enderror
        <br><br>
        <button type="submit">Crear post</button>
    </form>
</body>

</html>
