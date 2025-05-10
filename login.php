<?php
include './Login/connection.php'; // Conexión a la base de datos
session_start();

// Verificar versión de PHP
if (version_compare(PHP_VERSION, '5.5.0', '<')) {
    die("Se requiere PHP 5.5.0 o superior para las funciones de hash de contraseñas");
}

// Mensajes de sesión
$register_success = $_SESSION['register_success'] ?? null;
unset($_SESSION['register_success']);

$logout_message = $_SESSION['logout_message'] ?? null;
unset($_SESSION['logout_message']);

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    try {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            throw new Exception("Por favor completa todos los campos");
        }

        $email = $conn->real_escape_string(trim($_POST['email']));
        $password = $_POST['password'];

        // Consulta preparada
        $stmt = $conn->prepare("SELECT id, name, email, password FROM users WHERE email = ?");
        if (!$stmt) {
            throw new Exception("Error en el sistema. Por favor intente más tarde.");
        }

        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows === 0) {
            throw new Exception("Usuario no encontrado");
        }

        $user = $result->fetch_assoc();
        $authenticated = false;

        // 1. Intentar password_verify
        if (password_verify($password, $user['password'])) {
            $authenticated = true;
        }
        // 2. Intentar comparación directa (texto plano)
        elseif ($password === $user['password']) {
            $authenticated = true;

            // Migrar contraseña a hash seguro
            $newHash = password_hash($password, PASSWORD_DEFAULT);
            $updateStmt = $conn->prepare("UPDATE users SET password = ? WHERE id = ?");
            $updateStmt->bind_param("si", $newHash, $user['id']);
            $updateStmt->execute();
            $updateStmt->close();
        }

        if (!$authenticated) {
            throw new Exception("Contraseña incorrecta");
        }

        // Iniciar sesión
        $_SESSION['user'] = [
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        ];
        session_regenerate_id(true);

        $_SESSION['login_success'] = "¡Bienvenido de nuevo, {$user['name']}!";
        header('Location: ./Login/Principal.php');
        exit();

    } catch (Exception $e) {
        $msg = $e->getMessage();
        error_log("Error en login: " . $msg);
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        :root {
            --primary: #4e73df;
            --danger: #e74a3b;
            --success: #1cc88a;
            --dark: #5a5c69;
            --light: #f8f9fc;
        }
        body {
            background: #f4f6f9;
            font-family: 'Roboto', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .login-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 400px;
            text-align: center;
        }
        .login-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }
        .login-container .form-group {
            margin-bottom: 20px;
            position: relative;
            text-align: left; /* Alinea los nombres de los campos a la izquierda */
        }
        .login-container .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333333;
        }
        .login-container .form-control {
            width: 90%;
            padding: 12px 15px 12px 40px;
            border: 1px solid #dcdfe6;
            border-radius: 5px;
            font-size: 14px;
            color: #333333;
        }
        .login-container .form-control:focus {
            border-color: #4e73df;
            outline: none;
            box-shadow: 0 0 5px rgba(78, 115, 223, 0.3);
        }
        .login-container .input-icon {
            position: absolute;
            left: 15px;
            top: 50%;
            transform: translateY(-50%);
            color: #4e73df;
            font-size: 16px;
        }
        .login-container .btn {
            width: 100%;
            padding: 12px;
            background: #4e73df;
            color: #ffffff;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background 0.3s;
        }
        .login-container .btn:hover {
            background: #375a7f;
        }
        .login-container .forgot-password {
            display: block;
            margin-top: 10px;
            font-size: 12px;
            color: #4e73df;
            text-decoration: none;
        }
        .login-container .forgot-password:hover {
            text-decoration: underline;
        }
        .login-container .register-link {
            margin-top: 20px;
            font-size: 14px;
            color: #333333;
        }
        .login-container .register-link a {
            color: #4e73df;
            text-decoration: none;
        }
        .login-container .register-link a:hover {
            text-decoration: underline;
        }
        /* Ajuste del botón de ojo para ver la contraseña en el formulario de login */
        .login-container .password-toggle {
            position: absolute;
            right: 15px; /* Ajuste para que coincida con el diseño */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #4e73df;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2><i class="fas fa-sign-in-alt"></i> Iniciar Sesión</h2>
        
        <?php if ($register_success): ?>
            <div class="alert alert-success">
                <i class="fas fa-check-circle"></i> <?= htmlspecialchars($register_success) ?>
            </div>
        <?php endif; ?>
        
        <?php if ($logout_message): ?>
            <div class="alert alert-success">
                <i class="fas fa-info-circle"></i> <?= htmlspecialchars($logout_message) ?>
            </div>
        <?php endif; ?>
        
        <?php if ($msg): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> <?= htmlspecialchars($msg) ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico</label>
                <div style="position: relative;">
                    <input type="email" id="email" name="email" class="form-control" placeholder="tucorreo@ejemplo.com" required>
                    <i class="fas fa-envelope input-icon"></i>
                </div>
            </div>
            
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                    <i class="fas fa-lock input-icon"></i>
                    <span class="password-toggle" onclick="togglePassword()">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
                <a href="recuperar.php" class="forgot-password">¿Olvidaste tu contraseña?</a>
            </div>
            
            <button type="submit" name="submit" class="btn">
                <i class="fas fa-sign-in-alt"></i> Ingresar
            </button>
        </form>
        
        <div class="register-link">
            ¿No tienes cuenta? <a href="./Login/registro.php" style="font-weight: 600;">Regístrate aquí</a>
        </div>
    </div>

    <script>
        function togglePassword() {
            const password = document.getElementById('password');
            const icon = document.querySelector('.password-toggle i');
            
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        document.getElementById('email').addEventListener('blur', function() {
            if (!this.value.includes('@')) {
                this.setCustomValidity('Por favor ingresa un email válido');
            } else {
                this.setCustomValidity('');
            }
        });
    </script>
</body>
</html>
