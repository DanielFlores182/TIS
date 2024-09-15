@extends('layout.plantilla')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('titulo', 'Registrar')

@section('contenido')
    <div class="container">
        <h1>Registro Individual de Estudiantes</h1>
        
        <form action="{{ route('estudiantes.store') }}" method="POST">
            @csrf <!-- Protección contra ataques CSRF -->
            <div class="form-group">
                <label for="nombres">Nombres:</label>
                <input type="text" class="form-control" id="nombres" name="nombres" required>
            </div>
            
            <div class="form-group">
                <label for="apellidos">Apellidos:</label>
                <input type="text" class="form-control" id="apellidos" name="apellidos" required>
            </div>
            
            <div class="form-group">
                <label for="codsis">Código SIS:</label>
                <input type="text" class="form-control" id="codsis" name="codsis" required>
            </div>
            
            <div class="form-group">
                <label for="carnet">Carnet de Identidad:</label>
                <input type="text" class="form-control" id="carnet" name="carnet" required>
            </div>
            
            <button type="submit" class="btn btn-primary">Registrar</button>
        </form>
    </div>
@endsection