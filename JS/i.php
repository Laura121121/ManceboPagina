<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Misión, Visión y Valores</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 40px 20px;
            display: flex;
            justify-content: center;
        }
        
        .container {
            max-width: 1200px;
            width: 100%;
        }
        
        h1 {
            color: #333;
            text-align: center;
            margin-bottom: 40px;
            font-size: 32px;
            text-shadow: 1px 1px 2px rgba(0,0,0,0.1);
        }
        
        .cards-container {
            display: flex;
            justify-content: space-between;
            gap: 20px;
            flex-wrap: wrap;
        }
        
        .card {
            border-radius: 10px;
            padding: 25px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            flex: 1;
            min-width: 250px;
            transition: transform 0.3s ease;
            position: relative;
            overflow: hidden;
            color: white;
            height: 200px; /* Altura fija para todas las cards */
            display: flex;
            flex-direction: column;
        }
        
        .card::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: rgba(0, 0, 0, 0.5); /* Capa oscura para mejorar legibilidad */
            z-index: 1;
        }
        
        .card-content {
            position: relative;
            z-index: 2;
            height: 100%;
            display: flex;
            flex-direction: column;
        }
        
        /* Imágenes de fondo diferentes para cada card */
        .card:nth-child(1) {
            background: url('https://via.placeholder.com/400x500/2c3e50/ffffff?text=Misión') center/cover no-repeat;
        }
        
        .card:nth-child(2) {
            background: url('https://via.placeholder.com/400x500/3498db/ffffff?text=Visión') center/cover no-repeat;
        }
        
        .card:nth-child(3) {
            background: url('https://via.placeholder.com/400x500/e74c3c/ffffff?text=Valores') center/cover no-repeat;
        }
        
        .card:hover {
            transform: translateY(-5px) scale(1.02);
            box-shadow: 0 6px 12px rgba(0,0,0,0.15);
        }
        
        .card h2 {
            margin-top: 0;
            text-align: center;
            margin-bottom: 5px;
            font-size: 24px;
            padding-bottom: 10px;
            border-bottom: 2px solid rgba(255,255,255,0.3);
        }
        
        .card p {
            margin-bottom: 20px;
            line-height: 1.6;
            flex-grow: 1;
        }
        
        .ver-mas {
            color: white;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            padding: 8px 15px;
            border: 1px solid white;
            border-radius: 20px;
            transition: all 0.3s ease;
            align-self: flex-start;
            margin-top: auto;
        }
        
        .ver-mas:hover {
            background-color: white;
            color: #2c3e50;
        }
        
        @media (max-width: 768px) {
            .cards-container {
                flex-direction: column;
            }
            
            .card {
                margin-bottom: 20px;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Nuestra Identidad Corporativa</h1>
        
        <div class="cards-container">
            <div class="card">
                <div class="card-content">
                    <h2>Misión</h2>
                    <p>Proveer soluciones innovadoras y de calidad que superen las expectativas de nuestros clientes, contribuyendo al desarrollo sostenible y generando valor para todos nuestros stakeholders.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-content">
                    <h2>Visión</h2>
                    <p>Ser reconocidos como líderes en nuestro sector a nivel nacional para 2025 y expandirnos internacionalmente para 2030, manteniendo siempre nuestros estándares de excelencia.</p>
                </div>
            </div>
            
            <div class="card">
                <div class="card-content">
                    <h2>Valores</h2>
                    <p>
                        <strong>Integridad:</strong> Actuamos con ética y transparencia.<br>
                        <strong>Innovación:</strong> Buscamos constantemente mejoras.<br>
                        <strong>Excelencia:</strong> Calidad en todo lo que hacemos.<br>
                        <strong>Trabajo en equipo:</strong> Juntos logramos más.
                    </p>
                </div>
            </div>
        </div>
    </div>
</body>
</html>