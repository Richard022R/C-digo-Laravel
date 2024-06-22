@extends('layout')

@section('title', 'Servicios')

@section('content')
<div class="container mt-5">
    <div class="mb-3">
        <a href="{{ route('servicios.create') }}" class="btn btn-primary">Nuevo Servicio</a>
    </div>

    <h2>Servicios</h2>

    @if($servicios && $servicios->count() > 0)
        <table class="table table-bordered table-striped mt-3">
            <thead class="thead-light">
                <tr>
                    <th>Título</th>
                    <th>Descripción</th>
                </tr>
            </thead>
            <tbody>
                @foreach($servicios as $servicio)
                    <tr>
                        <td>
                            <a href="{{ route('servicios.show', $servicio) }}" class="text-primary">{{ $servicio->titulo }}</a>
                        </td>
                        <td>{{ $servicio->descripcion }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No existe ningún servicio que mostrar</p>
    @endif
</div>
@endsection


