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

            .register-form {
                background-color: #000635;
                padding: 2rem;
                border-radius: 0.5rem;
                box-shadow: 0 0.5rem 1rem rgba(0, 0, 0, 0.1);
                width: 100%;
                max-width: 400px;
                margin: 0 auto;
            }
            .register-form h2 {
                text-align: center;
                margin-bottom: 1.5rem;
                color: #e74c3c;
            }
            .register-form label {
                color: #e74c3c;
            }
                .register-form input {
                width: 100%;
                padding: 0.75rem;
                margin: 0.5rem 0;
                border: 1px solid #ccc;
                border-radius: 0.25rem;
                }
                .register-form button {
                width: 100%;
                padding: 0.75rem;
                background-color: #e61705;
                color: white;
                border: none;
                border-radius: 0.25rem;
                cursor: pointer;
                }
                .register-form button:hover {
                background-color: #2779bd;
                }
                .register-form .cancel-button {
                background-color: #ccc;
                color: black;
                }
                .register-form .cancel-button:hover {
                background-color: #888;
                }
                .register-form .button-group {
                display: flex;
                justify-content: space-between;
                }
            </style>
        </head>

    <body class="antialiased">
        <div id="app"></div>
        <script src="{{ mix('js/app.js') }}"></script>

        <div class="relative flex items-center justify-center min-h-screen bg-gray-100 dark:bg-gray-900">
                <!-- Aquí empieza el formulario de registro -->
            <div class="register-form">
                <h2>Registro de Usuario</h2>
                <form>
                    @csrf
                    <div>
                        <label for="username">Nombre de Usuario</label>
                        <input type="text" id="username" name="username" placeholder="Ingresa tu nombre de usuario" required>
                    </div>
                    <div>
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" placeholder="Ingresa tu correo" required>
                    </div>
                    <div>
                        <label for="confirm-email">Confirmar Correo Electrónico</label>
                        <input type="email" id="confirm-email" name="confirm-email" placeholder="Confirma tu correo" required>
                    </div>
                    <div>
                        <label for="password">Contraseña</label>
                        <input type="password" id="password" name="password" placeholder="Ingresa tu contraseña" required>
                    </div>
                    <div>
                       <label for="confirm-password">Confirmar Contraseña</label>
                        <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirma tu contraseña" required>
                    </div>
                    <div class="button-group">
                       <button type="submit">Registrar</button>
                        <button type="button" class="cancel-button">Cancelar</button>
                    </div>
                </form>
            </div>
            <!-- Fin del formulario de registro -->
        </div>
    </body>
</html>
