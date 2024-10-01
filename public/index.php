<?php 

require_once __DIR__ . '/../includes/app.php';

use MVC\Router;
use Controllers\LibrosController;

$router = new Router();


$router->get("/api/libros", [LibrosController::class, "getLibros"]);



// Comprueba y valida las rutas, que existan y les asigna las funciones del Controlador
$router->comprobarRutas();