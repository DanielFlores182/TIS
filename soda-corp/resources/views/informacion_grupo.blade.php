<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nombre de la Empresa</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            height: 100vh;
        }

        /* Estilos del menú de navegación */
        nav {
            width: 20%;
            background-color: #000635;
            color: white;
            padding: 20px;
            box-sizing: border-box;
        }

        nav h2 {
            text-align: center;
            margin-bottom: 40px;
        }

        nav ul {
            list-style: none;
            padding: 0;
        }

        nav ul li {
            margin-bottom: 20px;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
        }

        nav ul li a:hover {
            text-decoration: underline;
        }

        /* Estilos del contenido principal */
        .container {
            color: black;
            width: 80%;
            max-width: 800px;
            background-color: #f7f7f7;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: black;
            margin-bottom: 20px;
            font-size: 24px;
        }

        .section {
            border: 1px solid #ccc;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        .group-leader {
            font-size: 16px;
            margin-bottom: 10px;
        }

        .group-members {
            width: 100%;
            margin-top: 10px;
        }

        .group-members table {
            width: 100%;
            border-collapse: collapse;
        }

        .group-members th,
        .group-members td {
            padding: 10px;
            text-align: left;
            border-bottom: 1px solid #ccc;
        }

        .group-members th {
            background-color: #f1f1f1;
        }

        .update-button {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-top: 20px;
            font-weight: bold;
        }

        .update-button:hover {
            background-color: darkred;
        }
    </style>
</head>

<body>

    <!-- Menú de navegación a la izquierda -->
    <nav>
        <h2>Bienvenido Estudiante</h2>
        <ul>
            <li><a href="#">Tareas Pendientes</a></li>
            <li><a href="#">Cronograma de actividades</a></li>
            <li><a href="#">Historial de evaluaciones</a></li>
            <li><a href="#">Ver grupo</a></li>
            <li><a href="#">Evaluar</a></li>
            <li><a href="#">Darme de baja en Tis</a></li>
        </ul>
        <a href="#">Cerrar Sesión</a>
    </nav>

    <!-- Contenido principal -->
    <div class="container">
        <h1>NOMBRE DE LA EMPRESA</h1>

        <div class="section">
            <label>Líder de grupo</label>
            <p class="group-leader">Nombre completo del líder del grupo</p>
        </div>

        <div class="section">
            <label>Integrantes del grupo/equipo</label>
            <div class="group-members">
                <table>
                    <thead>
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
            </div>
        </div>

        <button class="update-button">ACTUALIZAR DATOS</button>
    </div>

</body>

</html>
