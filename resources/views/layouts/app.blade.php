<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- Si se adjunta un contenido depués del nombre, es el valor por defecto --}}
    {{-- <title>@yield('title', 'Valor por defecto')</title> --}}
    <title>@yield('title')</title>

    {{-- fontawesom --}}
    {{-- tipografía --}}

    {{-- @stack funciona de forma semejante a @yield (indica dónde aparecera un contenido variable).
        Pero @stack utiliza en la vista @push en lugar de @section.
        La diferencia es que @yield define un único elemento con ese nombre, pero @stack se puede
        repetir según se le vaya añadiendo contenido (es acumulativo)
    --}}
    {{-- @stack('css') --}}
</head>

<body>
    <header></header>

    @yield('content')

    <footer></footer>
</body>

</html>
