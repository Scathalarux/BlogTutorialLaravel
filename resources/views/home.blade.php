{{-- Alternativa de vista completa con plantilla --}}
@extends('layouts.app')

{{--    @section('title')
            Laravel 12!
        @endsection     --}}

@section('title', 'Laravel 12')

@push('css')
    <style>
        body{
            background: #f3f3f3f;
        }
    </style>
@endpush
@push('css')
    <style>
        p{
            color: red;
        }
    </style>
@endpush
    
@section('content')
    <x-alert type="success" class='mb-4 mt-4'>
        <x-slot name="title">
            Atención!
        </x-slot>
        Contenido de la alerta
    </x-alert>

    <x-alert2 type="warning" class='mb-4 mt-4'>
        <x-slot name="title">
            Atención!
        </x-slot>
        Contenido de la alerta
    </x-alert2>

    <p>Hola Mundo</p>
@endsection
















{{-- Alternativa de vista completa con componente --}}
{{-- <x-app-layout>
    <div class="max-w-4xl mx-auto px-auto">
        <h1>Welcome to the homepage</h1>

        <x-alert type="success" class='mb-4 mt-4'>
            <x-slot name="title">
                Atención!
            </x-slot>
            Contenido de la alerta
        </x-alert>

        <x-alert2 type="warning" class='mb-4 mt-4'>
            <x-slot name="title">
                Atención!
            </x-slot>
            Contenido de la alerta
        </x-alert2>

        <p>Hola Mundo</p>
    </div>
</x-app-layout> --}}
