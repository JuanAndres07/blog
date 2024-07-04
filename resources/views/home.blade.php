@extends('layouts.app')

@section('title', 'Laravel 11')

@push('css')
    <style>
        body{
            background-color: #f3f3f3
        }
    </style>
@endpush

@push('css')
    <style>
        body{
            color: #333
        }
    </style>
@endpush

@section('content')
    <div class="max-w-4xl mx-auto px-4">

        <x-Alert2 type="warning" class="mb-10">

            <x-slot name="tittle">
                Nombre de la alerta
            </x-slot>

            Contenido de la alerta    
        </x-Alert>
        
        <p>
            Hola mundo
        </p>

        
    </div>

@endsection