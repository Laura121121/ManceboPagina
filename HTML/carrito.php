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
include("connection.php");

$msg='';
if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select1 = "SELECT * FROM `users` WHERE email = '$email' AND password= '$password'";
    $select_user = mysqli_query($conn,$select1);
    if(mysqli_num_rows($select_user)> 0){
        $row1 = mysqli_fetch_assoch($select_user);
        if($row1['user_type'] == 'user'){
            $_SESSION['user'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('location:user.php');
        }
        elseif($row1['user_type'] =='admin'){
            $_SESSION['admin'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('location:user.php');
        }
        else{
            $msg= "Contraseña incorrecta, intente de nuevo";
        }
    }
}
