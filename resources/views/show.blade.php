@extends('layout')

@section('title', 'Servicios | ' . $servicio->titulo)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-body">
                    <div class="text-center mb-3">
                        <img src="/storage/{{$servicio->image}}" alt="{{$servicio->titulo}}" class="img-fluid" style="max-width: 100%; height: auto;">
                    </div>
                    <div class="d-flex justify-content-between align-items-center mb-3">
                        <h3 class="card-title mb-0">{{ $servicio->titulo }}</h3>
                        <div>
                            @auth
                            <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning btn-sm">Editar servicio</a>
                            <form action="{{ route('servicios.destroy', $servicio) }}" method="post" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Eliminar</button>
                            </form>
                            @endauth
                        </div>
                    </div>
                    <p>{{ $servicio->descripcion }}</p>
                    <p class="text-muted">{{ $servicio->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
