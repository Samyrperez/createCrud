CREATE DATABASE registro_ventas;

USE registro_ventas;

CREATE TABLE ventas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100) NOT NULL,
    cantidad INT NOT NULL,
    precio DECIMAL(10,2) NOT NULL,
    total DECIMAL(10,2) GENERATED ALWAYS AS (cantidad * precio) STORED,
    fecha_venta TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
