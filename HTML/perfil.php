<?php
require_once '../Login/connection.php'; // Conexión a la base de datos
session_start();

// Verificar si el usuario está autenticado
if (!isset($_SESSION['user'])) {
    header('Location: ../Login/login.php');
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

<!-- Sección de información del perfil con el menú principal y botón para ver el perfil -->
<div class="profile-section">
    <nav class="main-menu">
        <ul>
            <li><a href="../Login/Principal.php">Inicio</a></li>
            <li><a href="Desayuno.php">Menú</a></li>
            <li><a href="Historia.php">Historia</a></li>
            <li><a href="perfil.php" class="btn-profile">Ver Perfil</a></li>
        </ul>
    </nav>

    <div class="profile-info">
        <h2>Información del Perfil</h2>
        <ul>
            <li><strong>Nombre:</strong> <?= htmlspecialchars($user['name']) ?></li>
            <li><strong>Email:</strong> <?= htmlspecialchars($user['email']) ?></li>
            <li><strong>Fecha de Registro:</strong> <?= htmlspecialchars($user['created_at']) ?></li>
        </ul>
    </div>
</div>

<style>
.profile-section {
    padding: 20px;
    background: #f8f9fa;
    border-radius: 10px;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    margin-top: 20px;
}
.main-menu ul {
    list-style: none;
    padding: 0;
    display: flex;
    gap: 15px;
    margin-bottom: 20px;
}
.main-menu ul li {
    display: inline;
}
.main-menu ul li a {
    text-decoration: none;
    color: #4e73df;
    font-weight: bold;
    padding: 10px 15px;
    border: 1px solid #4e73df;
    border-radius: 5px;
    transition: background 0.3s, color 0.3s;
}
.main-menu ul li a:hover {
    background: #4e73df;
    color: #fff;
}
.profile-info {
    margin-top: 20px;
}
.profile-info h2 {
    font-size: 24px;
    color: #333;
    margin-bottom: 15px;
}
.profile-info ul {
    list-style: none;
    padding: 0;
}
.profile-info ul li {
    font-size: 16px;
    margin-bottom: 10px;
    color: #555;
}
.profile-info ul li strong {
    color: #4e73df;
}
</style>