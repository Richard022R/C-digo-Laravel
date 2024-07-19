@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col text-center">
            <h1 class="display-4">Bienvenido a CODIGO-LARAVEL</h1>
            <p class="lead">Este es el lugar donde puedes gestionar y visualizar tus datos.</p>
        </div>
    </div>
    <div class="row mt-4">
        <div class="col text-center">
            @auth
                <div class="alert alert-success" role="alert">
                    <h4 class="alert-heading">Hola, {{ auth()->user()->name }}!</h4>
                    <p>Estamos encantados de verte de nuevo.</p>
                    <hr>
                    <p class="mb-0">Navega por nuestras secciones para más información.</p>
                </div>
            @else
                <div class="alert alert-warning" role="alert">
                    <h4 class="alert-heading">Bienvenido!</h4>
                    <p>Por favor, <a href="{{ route('login') }}" class="alert-link">inicia sesión</a> para acceder a todas las funcionalidades.</p>
                </div>
            @endauth
        </div>
    </div>
</div>
@endsection
