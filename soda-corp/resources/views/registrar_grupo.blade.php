<!-- resources/views/registrar_grupo.blade.php -->
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Datos del Grupo Empresarial/Equipo</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        h1 {
            color: #e74c3c;
            text-align: center;
        }
        form {
            display: flex;
            flex-direction: column;
        }
        label {
            margin-top: 10px;
            color: #555;
        }
        input[type="text"], select {
            padding: 10px;
            margin-top: 5px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }
        button {
            margin-top: 20px;
            padding: 10px;
            background-color: #000635;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }
        button:hover {
            background-color: #0056b3;
        }
        .nav-bar {
            width: 200px;
            background-color: #000635;
            color: #fff;
            padding: 10px;
            position: fixed;
            height: 100%;
        }
        .nav-bar a {
            color: #fff;
            text-decoration: none;
            display: block;
            padding: 10px 0;
        }
        .nav-bar a:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <h2>Menú</h2>
        <a href="#">Tareas Pendientes</a>
        <a href="#">Cronograma de actividades</a>
        <a href="#">Historial de evaluaciones</a>
        <a href="#">Ver grupo</a>
        <a href="#">Evaluar</a>
        <a href="#">Darme de baja en TIS</a>
        <a href="#">Cerrar Sesión</a>
    </div>
    <div class="container" style="margin-left: 220px;">
        <h1>REGISTRO DE DATOS DEL GRUPO EMPRESARIAL/EQUIPO</h1>
        <p>Complete el siguiente formulario para registrar la información básica del equipo.</p>
        <form>
            <div>
                <label for="nombre_grupo">Nombre del grupo/equipo</label>
                <input type="text" id="nombre_grupo" name="nombre_grupo">
            </div>
            <div>
                <label for="lider_grupo">Líder de grupo</label>
                <select id="lider_grupo" name="lider_grupo">
                    <!-- Opciones de líder -->
                </select>
            </div>
            <div>
                <label for="integrantes">Integrantes del grupo</label>
                <input type="text" id="integrantes" name="integrantes[]">
                <button type="button" onclick="agregarIntegrante()">Agregar nuevo miembro</button>
            </div>
            <button type="button">Guardar</button>
        </form>
    </div>
    <script>
        function agregarIntegrante() {
            // Lógica para agregar un nuevo campo de integrante
        }
    </script>
</body>
</html>
