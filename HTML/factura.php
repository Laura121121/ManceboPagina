<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Factura - Square One</title>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 20px;
        }
        
        .factura-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: white;
            box-shadow: 0 0 20px rgba(0,0,0,0.1);
            border-radius: 10px;
            overflow: hidden;
        }
        
        .header {
            background-color: #2c3e50;
            color: white;
            padding: 20px;
            text-align: center;
        }
        
        .header h1 {
            margin: 0;
            font-size: 28px;
        }

        .info-pago {
    padding: 20px;
    border-bottom: 1px solid #eee;
}

.info-pago h3 {
    margin-top: 0;
    color: #2c3e50;
}
        
        .info-factura {
            display: flex;
            justify-content: space-between;
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .info-cliente {
            padding: 20px;
            border-bottom: 1px solid #eee;
        }
        
        .detalle-factura {
            width: 100%;
            border-collapse: collapse;
        }
        
        .detalle-factura th {
            background-color: #f2f2f2;
            padding: 10px;
            text-align: left;
        }
        
        .detalle-factura td {
            padding: 12px 10px;
            border-bottom: 1px solid #eee;
        }
        
        .text-right {
            text-align: right;
        }
        
        .totales {
            padding: 20px;
            background-color: #f9f9f9;
        }
        
        .totales table {
            width: 100%;
        }
        
        .totales td {
            padding: 8px 0;
        }
        
        .total {
            font-weight: bold;
            font-size: 18px;
            color: #2c3e50;
            border-top: 2px solid #2c3e50;
            padding-top: 10px;
        }
        
        .footer {
            text-align: center;
            padding: 15px;
            font-size: 12px;
            color: #777;
            background-color: #f2f2f2;
        }
        
        .btn-imprimir {
            display: block;
            width: 100%;
            padding: 12px;
            background-color: #2c3e50;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            margin-top: 20px;
        }
        
        .hidden {
            display: none;
        }
    </style>
</head>
<body>
    <div class="factura-container">
        <div class="header">
            <h1>SQUARE ONE</h1>
            <p>Restaurante & Café</p>
        </div>
        
        <div class="info-factura">
            <div>
                <p><strong>Fecha:</strong> <span id="fecha-actual"></span></p>
                <p><strong>Factura #:</strong> SQ-<span id="numero-factura"></span></p>
            </div>
            <div>
                <p><strong>Teléfono:</strong> (809) 555-1234</p>
                <p><strong>Dirección:</strong> Av. Principal #123, Santo Domingo</p>
            </div>
        </div>
        
        <div class="info-cliente">
            <h3>Cliente:</h3>
            <p><strong>Nombre:</strong> <span id="nombre-cliente">Cliente Generico</span></p>
            <p><strong>Dirección de entrega:</strong> <span id="direccion-entrega">Calle Ejemplo #456</span></p>
        </div>
        
        <table class="detalle-factura">
            <thead>
                <tr>
                    <th>Descripción</th>
                    <th>Cant.</th>
                    <th>P. Unit.</th>
                    <th class="text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody id="items-factura">
                <!-- Los items se agregarán dinámicamente desde el carrito -->
            </tbody>
        </table>
        
        <div class="totales">
            <table>
                <tr>
                    <td>Subtotal:</td>
                    <td class="text-right" id="subtotal">RD$ 0.00</td>
                </tr>
                <tr>
                    <td>ITBIS (18%):</td>
                    <td class="text-right" id="itbis">RD$ 0.00</td>
                </tr>
                <tr>
                    <td>Costo de envío:</td>
                    <td class="text-right" id="envio">RD$ 150.00</td>
                </tr>
                <tr>
                    <td class="total">TOTAL:</td>
                    <td class="text-right total" id="total">RD$ 0.00</td>
                </tr>
            </table>
        </div>
        
        <div class="footer">
            <p>¡Gracias por su compra! • Vuelva pronto</p>
            <p>Factura generada electrónicamente - válida sin firma</p>
        </div>
        
        <button class="btn-imprimir" onclick="window.print()">Imprimir Factura</button>
    </div>

    <script>
        // Obtener los productos del carrito desde localStorage
        let cartItems = JSON.parse(localStorage.getItem('cartItems')) || [];
        
        // Configuración
        const tasaITBIS = 0.18;
        const costoEnvio = 150;
        
        // Función para formatear números como moneda
        function formatoMoneda(monto) {
            return `RD$ ${monto.toFixed(2).replace(/\B(?=(\d{3})+(?!\d))/g, ",")}`;
        }
        
        // Función para calcular totales
        function calcularTotales() {
            let subtotal = 0;
            
            // Calcular subtotal
            cartItems.forEach(item => {
                subtotal += item.cantidad * item.precio;
            });
            
            // Calcular ITBIS
            const itbis = subtotal * tasaITBIS;
            
            // Calcular total
            const total = subtotal + itbis + costoEnvio;
            
            // Actualizar DOM
            document.getElementById('subtotal').textContent = formatoMoneda(subtotal);
            document.getElementById('itbis').textContent = formatoMoneda(itbis);
            document.getElementById('total').textContent = formatoMoneda(total);
        }
        
        // Función para generar número de factura aleatorio
        function generarNumeroFactura() {
            const numero = Math.floor(Math.random() * 10000);
            return numero.toString().padStart(4, '0');
        }
        
        // Función para mostrar la fecha actual
        function mostrarFecha() {
            const ahora = new Date();
            const opciones = { year: 'numeric', month: 'long', day: 'numeric' };
            document.getElementById('fecha-actual').textContent = ahora.toLocaleDateString('es-ES', opciones);
        }
        
        // Función para cargar los items en la tabla
        function cargarItems() {
            const tbody = document.getElementById('items-factura');
            tbody.innerHTML = ''; // Limpiar tabla
            
            if (cartItems.length === 0) {
                const tr = document.createElement('tr');
                tr.innerHTML = '<td colspan="4" style="text-align: center;">No hay productos en el carrito</td>';
                tbody.appendChild(tr);
                return;
            }
            
            cartItems.forEach(item => {
                const subtotal = item.cantidad * item.precio;
                
                const tr = document.createElement('tr');
                tr.innerHTML = `
                    <td>${item.nombre}</td>
                    <td>${item.cantidad}</td>
                    <td>${formatoMoneda(item.precio)}</td>
                    <td class="text-right">${formatoMoneda(subtotal)}</td>
                `;
                
                tbody.appendChild(tr);
            });
        }
        
        // Inicializar la factura
        document.addEventListener('DOMContentLoaded', function() {
            mostrarFecha();
            document.getElementById('numero-factura').textContent = generarNumeroFactura();
            cargarItems();
            calcularTotales();
            
            // Obtener datos del cliente si existen
            const clienteData = JSON.parse(localStorage.getItem('clienteData'));
            if (clienteData) {
                document.getElementById('nombre-cliente').textContent = clienteData.nombre || 'Cliente Generico';
                document.getElementById('direccion-entrega').textContent = clienteData.direccion || 'Calle Ejemplo #456';
            }
        });
    </script>
</body>
</html>