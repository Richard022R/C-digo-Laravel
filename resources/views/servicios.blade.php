@extends('layout')

@section('title', 'Servicios')

@section('content')
<div style="margin: 20px;">
    <a href="{{ route('servicios.create') }}" style="text-decoration: none; background-color: #007bff; color: white; padding: 10px 15px; border-radius: 5px;">Nuevo Servicio</a>
</div>

<h2>Servicios</h2>

@if($servicios && $servicios->count() > 0)
    <table style="width: 100%; border-collapse: collapse; margin-top: 20px;">
        <thead>
            <tr style="background-color: #f2f2f2;">
                <th style="padding: 10px; border: 1px solid #ddd;">Título</th>
                <th style="padding: 10px; border: 1px solid #ddd;">Descripción</th>
            </tr>
        </thead>
        <tbody>
            @foreach($servicios as $servicio)
                <tr>
                    <td style="padding: 10px; border: 1px solid #ddd;">
                        <a href="{{ route('servicios.show', $servicio) }}" style="text-decoration: none; color: #007bff;">{{ $servicio->titulo }}</a>
                    </td>
                    <td style="padding: 10px; border: 1px solid #ddd;">{{ $servicio->descripcion }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No existe ningún servicio que mostrar</p>
@endif

@endsection

