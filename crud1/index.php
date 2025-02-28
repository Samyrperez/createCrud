<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">
    <title>Document</title>
</head>

<body>

    <h2>Registrar Venta</h2>

    <form action="create.php" method="POST">
        <label for="producto">Producto:</label>
        <input type="text" id="producto" name="producto" required>

        <label for="cantidad">Cantidad:</label>
        <input type="number" id="cantidad" name="cantidad" min="1" required>

        <label for="precio">Precio Unitario:</label>
        <input type="number" id="precio" name="precio" min="0.01" step="0.01" required>

        <button type="submit">Registrar Venta</button>
    </form>
</body>

</html>