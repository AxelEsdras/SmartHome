<<<<<<< HEAD
<?php
$servername = "localhost"; // Cambia si tu servidor es diferente
$username = "root"; // Cambia si tu usuario es diferente
$password = ""; // Cambia si tienes contraseña

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS smartHome";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos 'smartHome' creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

// Seleccionar la base de datos
$conn->select_db("smartHome");

// Crear tabla clientes
$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'clientes' creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
=======
<?php
$servername = "localhost"; // Cambia si tu servidor es diferente
$username = "root"; // Cambia si tu usuario es diferente
$password = ""; // Cambia si tienes contraseña

// Crear conexión
$conn = new mysqli($servername, $username, $password);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Crear base de datos
$sql = "CREATE DATABASE IF NOT EXISTS smartHome";
if ($conn->query($sql) === TRUE) {
    echo "Base de datos 'smartHome' creada exitosamente<br>";
} else {
    echo "Error al crear la base de datos: " . $conn->error . "<br>";
}

// Seleccionar la base de datos
$conn->select_db("smartHome");

// Crear tabla clientes
$sql = "CREATE TABLE IF NOT EXISTS clientes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    correo VARCHAR(100) NOT NULL,
    telefono VARCHAR(15),
    fecha_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Tabla 'clientes' creada exitosamente";
} else {
    echo "Error al crear la tabla: " . $conn->error;
}

// Cerrar conexión
$conn->close();
?>
>>>>>>> 70c9b03 (Publicando la página)
