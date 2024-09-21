<!DOCTYPE html>
<html lang="es"> <!-- Idioma español-->
<head>

    <link rel="icon" href="{{ asset('image/logo.png') }}" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    @yield('links')
    <!-- Utiliza los links de arriba-->

    <title>@yield('titulo')</title> <!-- Titulo cambiable de la pagina -->
</head>

<link rel="stylesheet" href="{{ asset('css/plantilla.css') }}">
@yield('style')<!-- Ruta del css -->

<!-- Inicio menu lateral-->
<body>
    <header class="cabecera">
        <div class="contMenu" id="menu">
            <nav class="menu" >
                <div class="imagen">
                    <img src="{{ asset('image/logo-fcyt.png') }}" alt="Icono">
                </div>
                <ul>
                    <li class="menu-item">
                        <a href="#" class="menu-toggle">Registrar Estudiantes</a>
                        <ul class="submenu">
                            <li class="opcionsubmenu"><a href="#">Registro individual</a></li>
                            <li class="opcionsubmenu"><a href="#">Registrar por planilla</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>
                    <li>
                        <a href=""></a>
                    </li>           
                    <li>
                        <a href=""></a>
                    </li>    
                </ul>
                <div class="user" id="usuario">
                    <ul>
                        <p>Bienvenido Docente</p>
                    </ul>                    
                </div>
            </nav>
        </div>
    </header>
    <!-- Fin menu lateral-->

    <!-- inicio Contenido paginas -->
    <main class="principal">
        <div class="cont1">
            <div class="cont2">
                @yield('contenido')
            </div>
        </div>
    </main>
    <div id="fondoGris"></div>
    <!-- Fin contenido paginas-->
</body>

<script src="{{ asset('js/plantilla.js') }}"></script>
@yield('script')<!-- Ruta del js-->
</html>