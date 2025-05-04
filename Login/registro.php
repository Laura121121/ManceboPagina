<?php
include("connection.php");

$msg = '';
if (isset($_POST['submit'])) {
    $name     = $_POST['name'];
    $email    = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password !== $cpassword) {
        $msg = "Las contraseñas no coinciden.";
    } else {
        $select = "SELECT * FROM `users` WHERE email = '$email'";
        $select_user = mysqli_query($conn, $select);

        if (mysqli_num_rows($select_user) > 0) {
            $msg = "¡El usuario ya existe!";
        } else {
            $insert1 = "INSERT INTO `users`(`name`, `email`, `password`) VALUES ('$name','$email','$password')";
            mysqli_query($conn, $insert1);
            header('Location: login.php');
            exit();
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="registro.css">
    <link rel="stylesheet" href="css/boostrap.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>registro</title>
</head>
<body>
    <style>
        /* Reset básico */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body {
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    background: #f0f2f5;
    display: flex;
    justify-content: center;
    align-items: center;
    min-height: 100vh;
}

/* Contenedor del formulario */
.form {
    background: #fff;
    padding: 2.5rem;
    border-radius: 12px;
    box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
    width: 100%;
    max-width: 450px;
}

/* Encabezado */
.form h2 {
    text-align: center;
    margin-bottom: 1.5rem;
    color: #333;
}

/* Grupo de formulario */
.form-group {
    margin-bottom: 1.2rem;
}

/* Inputs */
input[type="text"],
input[type="email"],
input[type="password"] {
    width: 100%;
    padding: 0.75rem;
    border: 1px solid #ccc;
    border-radius: 8px;
    transition: border-color 0.3s ease;
}

input:focus {
    border-color: #007bff;
    outline: none;
}

/* Botón */
button {
    width: 100%;
    padding: 0.75rem;
    border: none;
    background-color: #28a745;
    color: #fff;
    border-radius: 8px;
    font-size: 1rem;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

button:hover {
    background-color: #218838;
}

/* Mensaje y enlaces */
p {
    text-align: center;
    margin-top: 1rem;
    font-size: 0.9rem;
}

a {
    color: #007bff;
    text-decoration: none;
}

a:hover {
    text-decoration: underline;
}

    </style>
    <div class="form">
        <form action="" method="post">
            <h2>Registro</h2>
            <p class="msg"><? = $msg?></p>
            <div class="form-group">
                <input type="text" name="name" placeholder="name" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="email" name="email" placeholder="Email" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="password" placeholder="Contraseña" class="form-control" require>
            </div>
            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirma tu contraseña" class="form-control" require>
            </div>
            <button class="btn font-weight-bold" name="submit">Registrate</button>
            <p>Ya Tienes Una Cuenta? <a href="login.php"> Inicia Sesion</a></p>
        </form>
    </div>
    
</body>
</html>