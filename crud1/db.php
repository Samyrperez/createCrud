<?php
// 1️⃣ Conectar a la base de datos (XAMPP usa localhost, usuario 'root' y sin contraseña por defecto)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "registro_ventas";

$conexion = new mysqli($servername, $username, $password, $dbname);

// 2️⃣ Verificar la conexión
if ($conexion->connect_error) {
    die("Error en la conexion: " . $conexion->connect_error);
}
