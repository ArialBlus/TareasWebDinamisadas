@extends('layout')

@section('title', 'Tabla de Multiplicar del ' . $numero)

@section('content')
    <h1 class="text-center">Tabla de Multiplicar del {{ $numero }}</h1>
    <table class="table table-bordered mt-4">
        <thead>
            <tr>
                <th>Multiplicador</th>
                <th>Resultado</th>
            </tr>
        </thead>
        <tbody>
            @for ($i = 1; $i <= 10; $i++)
                <tr>
                    <td>{{ $numero }} x {{ $i }}</td>
                    <td>{{ $tabla[$i-1] }}</td>
                </tr>
            @endfor
        </tbody>
    </table>
    <a href="{{ route('mostrar_tabla_multiplicativa') }}" class="btn btn-primary">Volver</a>
@endsection