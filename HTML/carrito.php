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
