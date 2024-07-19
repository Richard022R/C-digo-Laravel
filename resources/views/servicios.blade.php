@extends('layout')

@section('title', 'Servicios')

@section('content')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-3">
        <h2 class="mb-0">Servicios</h2>
        <a href="{{ route('servicios.create') }}" class="btn btn-primary">Nuevo Servicio</a>
    </div>

    @if($servicios && $servicios->count() > 0)
        <div class="table-responsive">
            <table class="table table-bordered table-striped mt-3 mx-auto">
                <thead class="thead-light">
                    <tr>
                        <th class="text-center">Título</th>
                        <th class="text-center">Descripción</th>
                        <th class="text-center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($servicios as $servicio)
                        <tr>
                            <td>
                                <a href="{{ route('servicios.show', $servicio) }}" class="text-primary">{{ $servicio->titulo }}</a>
                            </td>
                            <td>{{ $servicio->descripcion }}</td>
                            <td class="text-center">
                                <a href="{{ route('servicios.edit', $servicio) }}" class="btn btn-sm btn-warning">Editar</a>
                                <form action="{{ route('servicios.destroy', $servicio) }}" method="POST" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('¿Estás seguro de que deseas eliminar este servicio?')">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @else
        <div class="alert alert-info mt-3" role="alert">
            No existe ningún servicio que mostrar.
        </div>
    @endif
</div>
@endsection


