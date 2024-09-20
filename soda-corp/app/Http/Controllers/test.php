<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test(){
        /* CALL public.add_student(
            'pepe', 
            1, 
            'correo@gmail.com', 
            'informatica'
        ) */

        $host = 'http://isabelle.db.elephantsql.com';  // Dirección del host
        $dbname = 'bymbbrry';  // Nombre de la base de datos
        $user = 'bymbbrry';  // Usuario de tu base de datos
        $password = 'vwqXSm7GuRBcQLjfNubKMWNer-Jek6PG';  // Contraseña de tu base de datos

        try {
            
            // Crear la conexión con PDO
            $dsn = "pgsql:host=$host;port=5432;dbname=$dbname;";
            $pdo = new PDO($dsn, $user, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,  // Configurar para que PDO lance excepciones en caso de error
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,  // Configurar el modo de fetch por defecto
            ]);
        
            // Prueba de conexión
            echo "Conexión exitosa a la base de datos de ElephantSQL";
            
        } catch (PDOException $e) {
            // Manejo de errores
            echo "Error de conexión: " . $e->getMessage();
        }
    }
}
