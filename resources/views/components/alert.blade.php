{{-- ESTE COMPONENTE ES UN COMPONENTE ANÓNIMO (solo la vista) PUES NO DEPENDE DE NINGUNA CLASE (COMPONENTE DE CLASE) --}}
{{-- ----------------------------------------------------------------------------------------------- --}}
{{-- 
    Si los atributos que le ponemos al componente (en este caso el alert) en la vista, 
    no se recogen en 'props' sino que quedarían almacenados en 'attributes'

--}}
@props(['type' => 'info'])

@php
    switch ($type) {
        case 'info':
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
        case 'danger':
            $class = 'text-red-800 bg-red-50 dark:bg-gray-800 dark:text-red-400';
            break;
        case 'success':
            $class = 'text-green-800 bg-green-50 dark:bg-gray-800 dark:text-green-400';
            break;
        case 'warning':
            $class = 'text-yellow-800 bg-yellow-50 dark:bg-gray-800 dark:text-yellow-400';
            break;
        case 'dark':
            $class = 'text-gray-800 bg-gray-50 dark:bg-gray-800 dark:text-gray-400';
            break;

        default:
            $class = 'text-blue-800 bg-blue-50 dark:bg-gray-800 dark:text-blue-400';
            break;
    }
@endphp

{{-- 
    Si colocamos $attributes delante del atributo class del div, se aplicará lo que contiene
    $attributes pero no lo del atributo del div. Por ello, cambiamos el orden para que primero
    se aplique el contenido del atributo class del div y luego $attributes.
    Sin embargo, al introducir en 2 ocasiones el atributo class, el segundo se omite.
    Para evitar esto, debemos fusionar el contenido de ambas class

--}}
<div {{ $attributes->merge(['class' => 'p-4 text-sm rounded-lg ' . $class]) }} role="alert">
    <span class="font-medium">{{ $title ?? 'Info Alert!' }}</span> {{ $slot }}
    {{-- <p>
        {{$attributes}}
    </p> --}}
</div>
