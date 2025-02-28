<?php

include 'db.php';
/*
// 3️⃣ Validar que los datos vienen por POST
if ($_SERVER["REQUEST_METHOD"] == "POST") { // $_SERVER["REQUEST_METHOD"] verifica como se envió el formulario.
    

    // 4️⃣ Recibir y limpiar los datos del formulario
    $producto = trim($_POST["producto"]); // El metodo trim(): Elimina espacios en blanco al inicio y final del nombre del producto.
    $cantidad = intval($_POST["cantidad"]); // El metodo intval(): Convierte la cantidad en número entero.
    $precio = floatval($_POST["precio"]); // El metodo floatval(): Convierte el precio en número decimal.
    
    // 5️⃣ Verificar que los campos no estén vacíos
    if (!empty($producto) && $cantidad > 0 && $precio > 0) {
        
        // 6️⃣ Preparar la consulta SQL
        $stmt = $conexion->prepare("INSERT INTO ventas (producto, cantidad, precio) VALUES (?, ?, ?)");  // Se insertan los valores con ? (evita inyecciones SQL).
        $stmt->bind_param("sid", $producto, $cantidad, $precio); // "s"=string, "i"=int, "d"=double

        // 7️⃣ Ejecutar la consulta y verificar si fue exitosa
        if ($stmt->execute()) {
            echo "<script>alert('Venta registrada con éxito'); window.location.href='index.php';</script>";
        } else {
            echo "Error al registrar la venta: " . $stmt->error;
        }

        // 8️⃣ Cerrar la consulta y la conexión
        $stmt->close();
    } else {
        echo "Todos los campos son obligatorios y deben ser valores válidos.";
    }
}

// 9️⃣ Cerrar conexión
$conexion->close();
*/

/*
1. Se prepara la consulta con prepare(), definiendo los marcadores ?:
$stmt = $conexion->prepare("INSERT INTO ventas (producto, cantidad, precio) VALUES (?, ?, ?)");


2. Se asignan los valores con bind_param(), especificando sus tipos de datos:
    $stmt->bind_param("sid", $producto, $cantidad, $precio);
    "s" → producto (string, "Laptop")
    "i" → cantidad (integer, 2)
    "d" → precio (double/float, 750.99)

3. Se ejecuta la consulta con execute():
$stmt->execute();
*/

