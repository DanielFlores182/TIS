@extends('layout.plantilla')

@section('links')
    <link rel="stylesheet" href="{{ asset('css/inicio.css') }}">
@endsection

@section('titulo', 'Registro de Planilla de Estudiantes')

@section('contenido')
    <div class="container">
        <h1>Registro de planilla de estudiantes</h1>
        
        <form action="" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="archivo">Seleccionar archivo:</label>
                <input type="file" class="form-control" id="archivo" name="archivo" accept=".xlsx, .xls" required>
            </div>
            
            <button type="submit" class="btn btn-success">Extraer</button>
            <button type="reset" class="btn btn-danger">Cancelar</button>
        </form>

        <!-- Tabla para mostrar los datos importados -->
        <table class="table table-striped mt-4">
            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>CodSis</th>
                    <th>Carnet</th>
                </tr>
            </thead>
            <tbody>
                <!-- Aquí se pueden colocar los datos extraídos del archivo -->
                @if(isset($estudiantes))
                    @foreach($estudiantes as $estudiante)
                        <tr>
                            <td>{{ $estudiante->nombre }}</td>
                            <td>{{ $estudiante->apellido }}</td>
                            <td>{{ $estudiante->codsis }}</td>
                            <td>{{ $estudiante->carnet }}</td>
                        </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
@endsection