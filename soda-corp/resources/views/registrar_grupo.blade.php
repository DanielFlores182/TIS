<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Datos del Grupo Empresarial/Equipo</title>
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
            color: white;
            width: 80%;
            max-width: 800px;
            background-color: #000635;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: auto;
        }

        h1 {
            text-align: center;
            color: red;
            margin-bottom: 20px;
        }

        p {
            text-align: center;
            margin-bottom: 20px;
        }

        .form-group {
            width: 100%;
            margin-bottom: 20px;
        }

        label {
            display: block;
            margin-bottom: 8px;
            font-weight: bold;
        }

        input[type="text"],
        select {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        /* Estilo para la tabla de integrantes */
        .group-members {
            width: 100%;
            margin-bottom: 20px;
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
            color: white;
        }

        .group-members th {
            background-color: #f1f1f1;
            color:black;
        }

        .group-members td input {
            width: 90%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .group-members .actions {
            width: 10%;
            text-align: center;
        }

        .group-members .actions button {
            background-color: white;
            border: none;
            cursor: pointer;
            width: 50px;
            height:50px;
        }

        .add-member {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin-bottom: 20px;
        }

        .add-member:hover {
            background-color: darkred;
        }

        .save-button {
            width: 100%;
            padding: 10px;
            background-color: red;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .save-button:hover {
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
        <h1>REGISTRO DE DATOS DEL GRUPO EMPRESARIAL/EQUIPO</h1>
        <p>Complete el siguiente formulario para registrar la información básica del equipo.</p>

        <div class="form-group">
            <label for="group-name">Nombre del grupo/equipo</label>
            <input type="text" id="group-name" placeholder="Ingrese el nombre del grupo/equipo">
        </div>

        <div class="form-group">
            <label for="group-leader">Líder de grupo</label>
            <select id="group-leader">
                <option value="">Seleccionar líder</option>
                <!-- Añadir más opciones según sea necesario -->
            </select>
        </div>

        <div class="group-members">
            <label>INTEGRANTES DEL GRUPO</label>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nombre completo</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td><input type="text" placeholder="Nombre completo"></td>
                        <td class="actions">
                            <button>&#128465;</button> <!-- Ícono de eliminar -->
                        </td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td><input type="text" placeholder="Nombre completo"></td>
                        <td class="actions">
                            <button>&#128465;</button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>

        <button class="add-member">+ Agregar nuevo miembro</button>
        <button class="save-button">GUARDAR</button>
    </div>

</body>

</html>
