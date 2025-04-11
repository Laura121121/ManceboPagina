<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Verificación de Edad</title>
    <style>
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-color: #EDE0D4;
            font-family: Arial, sans-serif;
        }
        .container {
            text-align: center;
            background: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            color: #6D4C41;
        }
        .buttons {
            margin: 20px 0;
        }
        button {
            background: none;
            border: 2px solid #6D4C41;
            padding: 10px 20px;
            border-radius: 25px;
            margin: 5px;
            cursor: pointer;
            font-size: 16px;
            color: #6D4C41;
            font-weight: bold;
        }
        button:hover {
            background: #6D4C41;
            color: white;
        }
        .warning {
            font-size: 12px;
            color: #6D4C41;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>¿ES MAYOR DE EDAD?</h2>
        <div class="buttons">
            <button onclick="confirmAge(true)">SI</button>
            <button onclick="confirmAge(false)">NO</button>
        </div>
        <p class="warning">El alcohol es perjudicial para la salud</p>
    </div>

    <script>
        function confirmAge(isAdult) {
            if (!isAdult) {
                alert("No tienes acceso a este sitio.");
                window.location.href = "http://127.0.0.1:5501/HTML/Principal.html";
            } else {
                alert("Bienvenido al sitio.");
                window.location.href = "http://127.0.0.1:5501/HTML/bebidasalcol.html";
            }
        }
    </script>
</body>
</html>
