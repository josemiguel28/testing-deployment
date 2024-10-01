<?php

namespace Controllers;

class LibrosController
{



    public static function getLibros()
    {
        header("Access-Control-Allow-Origin: *");
        header('Content-Type: application/json');
        // Simulamos algunos datos de libros
        $libros = [
            ["id" => 1, "titulo" => "El Quijote"],
            ["id" => 2, "titulo" => "Cien Años de Soledad"],
            ["id" => 3, "titulo" => "Don Juan Tenorio"]
        ];

        // Establecemos la cabecera para que el navegador reconozca que es JSON
        header('Content-Type: application/json');

        // Devolvemos los libros como JSON
        echo json_encode($libros);
    }
}
