@extends('layout')

@section('title', 'Contacto')

@section('content')
<div class="container mt-5">
    <h2 class="text-center mb-4">Contacto</h2>
    
    @if(session('estado'))
        <div class="alert alert-success text-center" role="alert">
            {{ session('estado') }}
        </div>
    @else
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="{{ route('contacto') }}" method="post" class="card p-4 shadow-sm">
                    @csrf {{-- Token para verificar que el formulario es seguro --}}
                    <div class="form-group">
                        <label for="nombre">Nombre:</label>
                        <input type="text" name="nombre" id="nombre" placeholder="Nombre" class="form-control" value="{{ old('nombre') }}">
                        @if ($errors->has('nombre'))
                            <div class="text-danger">{{ $errors->first('nombre') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Email" class="form-control" value="{{ old('email') }}">
                        @if ($errors->has('email'))
                            <div class="text-danger">{{ $errors->first('email') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="asunto">Asunto:</label>
                        <input type="text" name="asunto" id="asunto" placeholder="Asunto" class="form-control" value="{{ old('asunto') }}">
                        @if ($errors->has('asunto'))
                            <div class="text-danger">{{ $errors->first('asunto') }}</div>
                        @endif
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje:</label>
                        <textarea name="mensaje" id="mensaje" cols="15" rows="8" placeholder="Mensaje" class="form-control">{{ old('mensaje') }}</textarea>
                        @if ($errors->has('mensaje'))
                            <div class="text-danger">{{ $errors->first('mensaje') }}</div>
                        @endif
                    </div>
                    <div class="text-center">
                        <button type="reset" class="btn btn-secondary">Cancelar</button>
                        <button type="submit" class="btn btn-primary">Enviar</button>
                    </div>
                </form>
            </div>
        </div>
    @endif
</div>
@endsection

