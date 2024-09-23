<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */
            /* Aquí se mantiene todo el estilo original que ya tienes */
            html { line-height:1.15; -webkit-text-size-adjust:100% }
            
            body { margin:20px; font-family: 'Nunito', sans-serif; }
            /* Estilos del formulario */
            .login-form {
                background-color: #000635;
                padding: 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            .login-form h2 {
                text-align: center;
                margin-bottom: 1.5rem;
                color: #e74c3c
            }
            .login-form label {
                color: #e74c3c; 
            }
            .login-form input {
                width: 100%;
                padding: 0.75rem;
                margin: 0.5rem 0;
                border: 1px solid #ccc;
                border-radius: 0.25rem;
            }
            .login-form button {
                width: 100%;
                padding: 0.75rem;
                background-color: #e61705;
                color: white;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
            }
            .login-form button:hover {
                background-color: #2779bd;
            }
            
        </style>
    </head>
    
    <body class="antialiased">
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}"></script>

        <div class="relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
            @if (Route::has('login'))
                <div class="fixed top-0 right-0 px-6 py-4 sm:block">
                    @auth
                        <a href="{{ url('/home') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Home</a>
                    @else
                        <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <!-- Aquí empieza el formulario de login -->
            <div class="login-form">
                <h2>Iniciar Sesión</h2>
                <!--estoy agregando un post pero sino funciona solo dejar <form> -->
                <form action="{{ route('login.authenticate') }}" method = "POST">
                    @csrf
                    <div>
                        <label for="correo">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
                    </div>
                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <button type="submit">Iniciar Sesión</button>
                </form>
                <div class="mt-5 flex justify-between text-xxs" >
                    <!--<a href="#" class="text-gray-700 dark:text-gray-500 underline hover:text-red-500">¿Olvidaste tu contraseña?</a> -->
                    <a href="#" class="text-gray-700 dark:text-gray-500 underline hover:text-red-500">No tengo cuenta, crear una</a>
                </div>
            </div>
            
        </div>
    </body>
</html>
