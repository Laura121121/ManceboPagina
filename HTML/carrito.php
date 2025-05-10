<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Carrusel de Imágenes</title>
  <link rel="stylesheet" href="../CSS/carrito.css">
</head>
<body>

  <div class="carousel">
    <div class="carousel-track-container">
      <ul class="carousel-track">
        <li class="carousel-slide current-slide">
          <img src="../IMG/a1.jpg" alt="Imagen 1">
        </li>
        <li class="carousel-slide">
          <img src="../IMG/a1.jpg" alt="Imagen 2">
        </li>
        <li class="carousel-slide">
          <img src="../IMG/a1.jpg" alt="Imagen 3">
        </li>
      </ul>
    </div>

    <button class="carousel-button left">&#10094;</button>
    <button class="carousel-button right">&#10095;</button>

    <div class="carousel-nav">
      <button class="carousel-indicator current-slide"></button>
      <button class="carousel-indicator"></button>
      <button class="carousel-indicator"></button>
    </div>
  </div>

  <script src="../JS/carrito.js"></script>
</body>
</html>

<?php
session_start(); // Asegurar que la sesión esté iniciada
require_once '../Login/connection.php'; // Conexión a la base de datos

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: ../Login/login.php'); // Redirigir al login si no está autenticado
    exit();
}

// Obtener datos del usuario desde la base de datos
$userId = $_SESSION['user']['id'];
$stmt = $conn->prepare("SELECT name, email, address FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<p>Error: Usuario no encontrado.</p>";
    exit();
}

$user = $result->fetch_assoc();
$stmt->close();

// Procesar la compra y generar la factura
if (isset($_POST['finalizar_compra'])) {
    // Aquí puedes agregar la lógica para guardar la compra en la base de datos
    header('Location: factura.php'); // Redirigir a la página de factura
    exit();
}
?>

<form method="POST" action="">
    <button type="submit" name="finalizar_compra" class="btn-finalizar">Finalizar Compra</button>
</form>
