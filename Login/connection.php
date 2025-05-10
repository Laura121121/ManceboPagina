<?php
// Conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$database = "login__bd"; // Nombre correcto de la base de datos

// Crear conexión
$conn = new mysqli($servername, $username, $password, $database);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}
?>