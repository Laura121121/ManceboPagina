<?php
include("connection.php");
session_start();

$msg = '';
if (isset($_POST['submit'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select1 = "SELECT * FROM `users` WHERE email = '$email' AND password = '$password'";
    $select_user = mysqli_query($conn, $select1);

    if (mysqli_num_rows($select_user) > 0) {
        $row1 = mysqli_fetch_assoc($select_user);
        $_SESSION['user'] = $row1['email'];
        $_SESSION['id'] = $row1['id'];
        header('Location: Principal.php');
    } else {
        $msg = "Correo o contraseña incorrectos, intente de nuevo";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="css/boostrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
</head>
<body>
    <div class="form">
        <form action="" method="post">
            <h2>Inicia Sesion</h2>
            <p class="msg"></p>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" class="form-control" require>
            </div>
            <button class="btn font-weight-bold" name="submit">Inicia Sesion</button>
            <p>No Tienes Una Cuenta? <a href="registro.php"> Registrate</a></p>
        </form>
    </div>
    
</body>
</html>