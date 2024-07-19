@extends('layout')

@section('title', 'Servicios | ' . $servicio->titulo)

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">{{ $servicio->titulo }}</h3>
                    <div class="float-right">
                        @auth
                        <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-warning">Editar servicio</a>
                        <form action="{{ route('servicios.destroy', $servicio) }}" method="post" style="display:inline;">
                            @csrf @method('DELETE')
                            <button class="btn btn-danger">Eliminar</button>
                        </form>
                        @endauth
                    </div>
                </div>
                
                <div class="card-body">
                    <p>{{ $servicio->descripcion }}</p>
                    <p class="text-muted">{{ $servicio->created_at->diffForHumans() }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection