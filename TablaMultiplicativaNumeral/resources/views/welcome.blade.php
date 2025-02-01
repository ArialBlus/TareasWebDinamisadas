@extends('layout')

@section('title', 'Generador de Tabla de Multiplicar')

@section('content')
    <h1 class="text-center">Generador de Tabla de Multiplicar</h1>
    <form action="{{ route('mostrar_tabla') }}" method="POST" class="mt-4">
        @csrf
        <div class="mb-3">
            <label for="numero" class="form-label">Ingrese un número:</label>
            <input type="number" class="form-control" id="numero" name="numero" required>
        </div>
        <button type="submit" class="btn btn-primary">Generar Tabla</button>
    </form>
@endsection