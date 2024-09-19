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
             <input type="text" class="form-control" id="nombres" name="nombres" 
              pattern="[A-Z\s]+" title="Solo se permiten letras mayúsculas y espacios"
              minlength="3" maxlength="64" required>
           </div>
           <script>
                document.getElementById('nombres').addEventListener('input', function (e) {
                e.target.value = e.target.value.toUpperCase().replace(/[^A-Z\s]/g, '');
             });
          </script>
    
            
    <div class="form-group">
              <label for="nombres">Apellidos:</label>
             <input type="text" class="form-control" id="nombres" name="nombres" 
              pattern="[A-Z\s]+" title="Solo se permiten letras mayúsculas y espacios"
              minlength="3" maxlength="64" required>
           </div>
           <script>
                document.getElementById('nombres').addEventListener('input', function (e) {
                e.target.value = e.target.value.toUpperCase().replace(/[^A-Z\s]/g, '');
             });
          </script>
            
            <div class="form-group">
    <label for="codsis">CodSis:</label>
    <input type="text" class="form-control" id="codsis" name="codsis" 
           maxlength="9" required>
</div>

<script>
    document.getElementById('codsis').addEventListener('input', function (e) {
        // Solo permitir números (elimina cualquier carácter no numérico)
        e.target.value = e.target.value.replace(/\D/g, '');

        // Si la longitud es mayor a 9, truncar el valor
        if (e.target.value.length > 9) {
            e.target.value = e.target.value.slice(0, 9);
        }
    });
</script>

            <div class="form-group">
                <label for="codsis">Correo:</label>
                <input type="text" class="form-control" id="codsis" name="codsis" required>
            </div>
            <div class="form-group">
                <label for="carrera">Carrera:</label>
                <select class="form-control" id="carrera" name="carrera" required>
                <option value="">Seleccione una carrera</option>
                <option value="sistemas">Ing. Sistemas</option>
                <option value="informatica">Ing. Informática</option>
                </select>
                </div>

            
            <button type="submit" class="btn btn-primary">Registrar</button>

            <button type="submit" class="btn btn-danger">Cancelar</button>
        </form>
    </div>
@endsection