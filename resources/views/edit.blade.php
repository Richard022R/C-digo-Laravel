@extends('layout')

@section('title', 'Editar Servicio')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    @auth
                    <h3 class="card-title">Editar Servicios</h3>
                    @endauth
                </div>
                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{ route('servicios.update', $servicio) }}" method="post">
                        @csrf @method('PATCH')
                        @include('partials.form', ['btnText' => 'Actualizar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
