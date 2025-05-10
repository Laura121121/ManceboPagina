<?php
include '../Login/connection.php';
session_start();

$msg = '';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['submit'])) {
    try {
        // Validar y limpiar datos
        $name = trim($_POST['name']);
        $email = filter_var(trim($_POST['email']), FILTER_VALIDATE_EMAIL);
        $password = $_POST['password'];
        $cpassword = $_POST['cpassword'];
        $phone = trim($_POST['phone']);
        $address = trim($_POST['address']);
        
        // Validaciones básicas
        if (empty($name) || empty($email) || empty($password) || empty($phone) || empty($address)) {
            throw new Exception("Todos los campos son requeridos");
        }
        
        if (!$email) {
            throw new Exception("El formato del email no es válido");
        }
        
        if (strlen($password) < 8) {
            throw new Exception("La contraseña debe tener al menos 8 caracteres");
        }
        
        if ($password !== $cpassword) {
            throw new Exception("Las contraseñas no coinciden");
        }
        
        // Verificar si el email ya existe
        $stmt = $conn->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();
        
        if ($stmt->num_rows > 0) {
            throw new Exception("Este email ya está registrado");
        }
        $stmt->close();
        
        // Hash de la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);
        
        // DEPURACIÓN: Ver hash generado
        error_log("Hash generado para nuevo usuario: " . $hashed_password);
        error_log("Longitud del hash: " . strlen($hashed_password));
        
        // Insertar nuevo usuario
        $stmt = $conn->prepare("INSERT INTO users (name, email, password, phone, address) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $email, $hashed_password, $phone, $address);
        
        if (!$stmt->execute()) {
            throw new Exception("Error al registrar el usuario: " . $stmt->error);
        }
        $stmt->close();
        
        // Redirigir a login con mensaje de éxito
        $_SESSION['register_success'] = "¡Registro exitoso! Por favor inicia sesión";
        header("Location: ../login.php");
        exit();
        
    } catch (Exception $e) {
        $msg = $e->getMessage();
    }
}
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
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
        .register-container {
            background: #ffffff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 450px;
            text-align: center;
        }
        .register-container h2 {
            font-size: 24px;
            margin-bottom: 20px;
            color: #333333;
        }
        .register-container .form-group {
            margin-bottom: 20px;
            position: relative;
            text-align: left; /* Alinea los nombres de los campos a la izquierda */
        }
        .register-container .form-label {
            display: block;
            margin-bottom: 5px;
            font-weight: bold;
            color: #333333;
        }
        .register-container .form-control {
            width: 90%;
            padding: 12px 15px; /* Mejora el tamaño de los cuadros */
            border: 1px solid #dcdfe6; /* Ajusta el borde */
            border-radius: 5px; /* Bordes redondeados */
            font-size: 14px;
            color: #333333;
        }
        .register-container .form-control:focus {
            border-color: #4e73df;
            outline: none;
            box-shadow: 0 0 5px rgba(78, 115, 223, 0.3);
        }
        .register-container .input-icon {
            position: absolute;
            left: 15px; /* Ajuste para que coincida con el login */
            top: 50%;
            transform: translateY(-50%);
            color: #4e73df;
            font-size: 16px;
        }
        .register-container .btn {
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
        .register-container .btn:hover {
            background: #375a7f;
        }
        .register-container .login-link {
            margin-top: 20px;
            font-size: 14px;
            color: #333333;
        }
        .register-container .login-link a {
            color: #4e73df;
            text-decoration: none;
        }
        .register-container .login-link a:hover {
            text-decoration: underline;
        }
        .alert {
            padding: 1rem;
            margin-bottom: 1.5rem;
            border-radius: 0.35rem;
            display: flex;
            align-items: center;
        }
        .alert i {
            margin-right: 10px;
        }
        .alert-danger {
            background-color: #f8d7da;
            color: #842029;
            border: 1px solid #f5c2c7;
        }
        .form-group {
            margin-bottom: 1.5rem;
            position: relative;
        }
        .form-label {
            display: block;
            margin-bottom: 0.5rem;
            font-weight: 600;
        }
        .form-control {
            width: 90%;
            padding: 0.75rem 1rem;
            border: 1px solid #d1d3e2;
            border-radius: 5px;
            box-shadow: inset 0 1px 3px rgba(0, 0, 0, 0.1);
            font-size: 1rem;
            transition: all 0.3s;
        }
        .form-control:focus {
            border-color: var(--primary);
            box-shadow: 0 0 0 0.2rem rgba(78, 115, 223, 0.25);
        }
        .input-icon {
            position: absolute;
            left: 15px; /* Ajuste para que coincida con el login */
            top: 50%;
            transform: translateY(-50%);
            color: #d1d3e2;
        }
        .btn {
            width: 100%;
            padding: 0.75rem;
            background: linear-gradient(90deg, #4e73df, #1cc88a);
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: transform 0.2s;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .btn i {
            margin-right: 8px;
        }
        .btn:hover {
            transform: scale(1.05);
        }
        .text-center {
            text-align: center;
        }
        .mt-3 {
            margin-top: 1rem;
        }
        .password-toggle {
            position: absolute;
            right: 15px; /* Ajuste para que coincida con el login */
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            color: #4e73df;
            font-size: 16px;
        }
    </style>
</head>
<body>
    <div class="register-container">
        <div class="icon">
            <i class="fas fa-user-plus"></i>
        </div>
        
        <h2>Registro</h2>
        
        <?php if ($msg): ?>
            <div class="alert alert-danger">
                <i class="fas fa-exclamation-circle"></i> <?= htmlspecialchars($msg) ?>
            </div>
        <?php endif; ?>
        
        <form method="POST" action="">
            <div class="form-group">
                <label for="name" class="form-label">Nombre completo</label>
                <div style="position: relative;">
                    <input type="text" id="name" name="name" class="form-control" placeholder="Tu nombre" required
                           value="<?= isset($_POST['name']) ? htmlspecialchars($_POST['name']) : '' ?>">
                    
                </div>
            </div>
            
            <div class="form-group">
                <label for="email" class="form-label">Correo electrónico</label>
                <div style="position: relative;">
                    <input type="email" id="email" name="email" class="form-control" placeholder="tucorreo@ejemplo.com" required
                           value="<?= isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '' ?>">
                    
                </div>
            </div>
            
            <div class="form-group">
                <label for="password" class="form-label">Contraseña</label>
                <div style="position: relative;">
                    <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                    
                    <span class="password-toggle" onclick="togglePassword('password')">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="cpassword" class="form-label">Confirmar Contraseña</label>
                <div style="position: relative;">
                    <input type="password" id="cpassword" name="cpassword" class="form-control" placeholder="••••••••" required>
                    
                    <span class="password-toggle" onclick="togglePassword('cpassword')">
                        <i class="fas fa-eye"></i>
                    </span>
                </div>
            </div>
            
            <div class="form-group">
                <label for="phone" class="form-label">Teléfono</label>
                <div style="position: relative;">
                    <input type="text" id="phone" name="phone" class="form-control" placeholder="Tu teléfono" required
                           value="<?= isset($_POST['phone']) ? htmlspecialchars($_POST['phone']) : '' ?>">
                    
                </div>
            </div>

            <div class="form-group">
                <label for="address" class="form-label">Dirección</label>
                <div style="position: relative;">
                    <input type="text" id="address" name="address" class="form-control" placeholder="Tu dirección" required
                           value="<?= isset($_POST['address']) ? htmlspecialchars($_POST['address']) : '' ?>">
                
                </div>
            </div>
            
            <button type="submit" name="submit" class="btn">
                <i class="fas fa-user-plus"></i> Registrarse
            </button>
        </form>
        
        <div class="options">
            <div class="text-center mt-3">
                ¿Ya tienes cuenta? <a href="../login.php" style="font-weight: 600;">Inicia sesión aquí</a>
            </div>
        </div>
    </div>

    <script>
        function togglePassword(fieldId) {
            const password = document.getElementById(fieldId);
            const icon = password.nextElementSibling.querySelector('i');
            
            if (password.type === 'password') {
                password.type = 'text';
                icon.classList.replace('fa-eye', 'fa-eye-slash');
            } else {
                password.type = 'password';
                icon.classList.replace('fa-eye-slash', 'fa-eye');
            }
        }

        // Validación en tiempo real del email
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