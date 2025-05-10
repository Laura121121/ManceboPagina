<?php
require_once 'connection.php';
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: login.php');
    exit();
}

// Obtener datos del usuario desde la base de datos
$userId = $_SESSION['user']['id'];
$stmt = $conn->prepare("SELECT name, email, created_at FROM users WHERE id = ?");
$stmt->bind_param("i", $userId);
$stmt->execute();
$result = $stmt->get_result();

if ($result->num_rows === 0) {
    echo "<p>Error: Usuario no encontrado.</p>";
    exit();
}

$user = $result->fetch_assoc();
$stmt->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perfil del Usuario</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f6f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .profile-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 400px;
            text-align: center;
        }
        .profile-container h2 {
            color: #4e73df;
            margin-bottom: 20px;
        }
        .profile-container ul {
            list-style: none;
            padding: 0;
        }
        .profile-container ul li {
            margin-bottom: 10px;
            font-size: 16px;
            color: #333;
        }
        .profile-container ul li strong {
            color: #4e73df;
        }
        .btn {
            display: inline-block;
            margin-top: 20px;
            padding: 10px 20px;
            background: #4e73df;
            color: #fff;
            border: none;
            border-radius: 5px;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #375a7f;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <h2>Información del Perfil</h2>
        <ul>
            <li><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></li>
            <li><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></li>
            <li><strong>Fecha de Registro:</strong> <?= htmlspecialchars($user['created_at']) ?></li>
        </ul>
        <a href="Principal.php" class="btn">Volver al Inicio</a>
    </div>
</body>
</html>