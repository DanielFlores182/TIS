<!-- resources/views/informacion_grupo.blade.php -->
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
        .table {
            width: 100%;
            margin-top: 20px;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #ddd;
            padding: 8px;
        }
        .table th {
            background-color: #000635;
            color: white;
        }
    </style>
</head>
<body>
    <div class="nav-bar">
        <h2>Menú</h2>
        <a href="#">Tareas y actividades</a>
        <a href="#">Historial de evaluaciones</a>
        <a href="#">Ver el grupo</a>
        <a href="#">Evaluación</a>
        <a href="#">Darme de baja en TIS</a>
        <a href="#">Cerrar Sesión</a>
    </div>
    <div class="container" style="margin-left: 220px;">
        <h1>NOMBRE DE LA EMPRESA</h1>
        <form>
            <div>
                <label for="nombre_lider">Nombre completo del líder del grupo</label>
                <input type="text" id="nombre_lider" name="nombre_lider">
            </div>
            <table class="table">
                <thead>
                    <tr>
                        <th colspan="2">Integrantes del grupo/equipo</th>
                    </tr>
                    <tr>
                        <th>#</th>
                        <th>Nombre</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Nombre de integrante 1</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>Nombre de integrante 2</td>
                    </tr>
                </tbody>
            </table>
            <button type="button">ACTUALIZAR DATOS</button>
        </form>
    </div>
</body>
</html>
