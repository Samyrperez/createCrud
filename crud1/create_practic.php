<?php

include 'db.php';

// if ($_SERVER["REQUEST_METHOD"] == "POST") {

//     $producto = trim($_POST["producto"]);
//     $cantidad = intval($_POST["cantidad"]);
//     $precio = floatval($_POST["precio"]);


//     if (!empty($producto) && $cantidad > 0 && $precio > 0) {

//         $stmt = $conexion->prepare("CREATE INTO ventas (producto, cantidad, precio) VALUE (?, ?, ?)");
//         $stmt->bind_param("sid", $producto, $cantidad, $precio);

//         if ($stmt->execute()){
//             echo "<script>alert('Venta registrada con éxito')window.location.href='index.php';</script>";
//         } else {
//             echo "Error al registrar la vendta: " . $stmt->error;
//         }

//         $stmt->close();
//     } else {
//         echo  "Todos los campos son obligatorios y deben ser valores válidos.";
//     }
// } 

// $conexion->close();