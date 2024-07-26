@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    @auth
                    <h3 class="card-title">Editar Servicio</h3>
                    @endauth
                </div>
                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{ route('servicios.update', $servicio) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        @method('PATCH')
                        <div class="form-group">
                            <label for="titulo">Título</label>
                            <input type="text" class="form-control" id="titulo" name="titulo" value="{{ old('titulo', $servicio->titulo) }}" required>
                        </div>
                        <div class="form-group">
                            <label for="descripcion">Descripción</label>
                            <textarea class="form-control" id="descripcion" name="descripcion" required>{{ old('descripcion', $servicio->descripcion) }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="archivo">Seleccionar archivo</label>
                            <input type="file" class="form-control-file" id="archivo" name="archivo">
                        </div>
                        <div class="form-group">
                            @if($servicio->image)
                                <p>Imagen actual:</p>
                                <img src="/storage/{{ $servicio->image }}" alt="{{ $servicio->titulo }}" width="100" height="50">
                            @endif
                        </div>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
