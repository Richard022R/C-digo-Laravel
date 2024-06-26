@extends('layout')

@section('title', 'Crear Servicio')

@section('content')
<div class="container mt-5">
    <div class="row">
        <div class="col-md-8 offset-md-2">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Crear nuevo servicio</h3>
                </div>
                <div class="card-body">
                    @include('partials.validation-errors')
                    <form action="{{ route('servicios.store') }}" method="post">
                        @csrf
                        @include('partials.form', ['btnText' => 'Guardar'])
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
