@extends ('layout')

@section('title','Servicio')

@section('content')
    <h2 class="text-center">Servicios</h2>
    <ul>
        @if($servicios)
            @foreach($servicios as $item)
                <li>{{ $item['titulo'] }}</li>
            @endforeach
        @else
            <li>No hay servicios</li>
        @endif
    </ul>
@endsection