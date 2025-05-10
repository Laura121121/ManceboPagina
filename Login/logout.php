<?php
require_once 'connection.php';
session_start();

// Mensaje de despedida
$_SESSION['logout_message'] = "Has cerrado sesión correctamente";

// Destruir la sesión
session_destroy();

// Redirigir al login
header('Location: login.php');
exit();
?>