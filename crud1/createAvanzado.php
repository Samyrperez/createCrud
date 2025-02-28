<?php
include 'db.php';

if ($_SERVER["RESQUEST_METHOD"] == "POST") {

    $producto = trim($_POST["producto"]); // trim() elimina espacios en blanco antes y después del texto.
    $cantidad = filter_var($_POST["cantidad"], FILTER_VALIDATE_INT); // filter_var():  Convierte el valor en un número entero. Y   FILTER_VALIDATE_INT:  Si el usuario pone algo que no es un número, devuelve false.
    $precio = filter_var($_POST["precio"], FILTER_VALIDATE_FLOAT);
    
    if(empty($producto) || !$cantidad || $cantidad <= 0 || !$precio || $precio <= 0) {
        
    }
}