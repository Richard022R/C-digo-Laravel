@extends('layout')

@section('title', 'Nosotros')

@section('content')
<div class="container mt-5">
    <div class="jumbotron text-center bg-primary text-white p-5 rounded">
        <h1 class="display-4">Sobre Nosotros</h1>
        <p class="lead">Conozca más sobre nuestra misión, visión y los valores que nos guían.</p>
    </div>

    <div class="row mt-5">
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <img src="path/to/mission-icon.png" alt="Misión" class="mb-3" style="width: 100px;">
                    <h3 class="card-title">Misión</h3>
                    <p class="card-text">Nuestra misión es proporcionar soluciones tecnológicas innovadoras que ayuden a nuestros clientes a alcanzar sus objetivos.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <img src="path/to/vision-icon.png" alt="Visión" class="mb-3" style="width: 100px;">
                    <h3 class="card-title">Visión</h3>
                    <p class="card-text">Ser líderes en el sector tecnológico, reconocidos por nuestra calidad, innovación y compromiso con el cliente.</p>
                </div>
            </div>
        </div>
        <div class="col-md-4 text-center">
            <div class="card shadow-sm">
                <div class="card-body">
                    <img src="path/to/values-icon.png" alt="Valores" class="mb-3" style="width: 100px;">
                    <h3 class="card-title">Valores</h3>
                    <p class="card-text">Nos regimos por los valores de integridad, excelencia, colaboración y responsabilidad social.</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@push('styles')
<style>
    .jumbotron {
        background: linear-gradient(to right, #007bff, #6610f2);
        color: white;
    }

    .jumbotron h1 {
        font-size: 3.5rem;
        font-weight: bold;
    }

    .jumbotron p {
        font-size: 1.5rem;
    }

    .card img {
        width: 100px;
        margin-bottom: 15px;
    }

    .card-title {
        font-size: 1.75rem;
        margin-bottom: 10px;
    }

    .card-text {
        font-size: 1rem;
        color: #6c757d;
    }
</style>
@endpush
