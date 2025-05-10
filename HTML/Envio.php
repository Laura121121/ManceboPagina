<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Formulario de Envío</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background: #f4f4f4;
      padding: 20px;
    }

    .form-container {
      background: #fff;
      padding: 20px;
      max-width: 400px;
      margin: auto;
      border-radius: 10px;
      box-shadow: 0 0 10px rgba(0,0,0,0.1);
    }

    h2 {
      text-align: center;
    }

    label {
      display: block;
      margin-top: 15px;
    }

    input, textarea, select {
      width: 93%;
      padding: 10px;
      margin-top: 5px;
      border: 1px solid #ccc;
      border-radius: 5px;
    }

    .payment-options {
      display: flex;
      justify-content: space-between;
      margin-top: 10px;
    }

    .payment-options label {
      flex: 1;
      text-align: center;
    }

    button {
      margin-top: 20px;
      width: 100%;
      background-color: #28a745;
      color: white;
      border: none;
      padding: 10px;
      font-size: 16px;
      border-radius: 5px;
      cursor: pointer;
    }

    button:hover {
      background-color: #218838;
    }

    .error {
      color: red;
      font-size: 14px;
    }
  </style>
</head>
<body>

<div class="form-container">
  <h2>Datos de Envío</h2>
  <form id="envioForm">
    <label for="nombre">Nombre del Cliente:</label>
    <input type="text" id="nombre" name="nombre" required>

    <label for="telefono">Teléfono del Cliente:</label>
    <input type="tel" id="telefono" name="telefono" required>

    <label for="direccion">Dirección:</label>
    <textarea id="direccion" name="direccion" rows="3" required></textarea>

    <label>Método de Pago:</label>
    <div class="payment-options">
      <label><input type="radio" name="pago" value="paypal" required> PayPal</label>
      <label><input type="radio" name="pago" value="efectivo"> Efectivo</label>
    </div>

    <div class="error" id="errorMsg"></div>
    <button type="submit">Enviar</button>
  </form>
</div>

<script>
  const form = document.getElementById("envioForm");
  const errorMsg = document.getElementById("errorMsg");

  form.addEventListener("submit", function(e) {
    e.preventDefault();

    const nombre = form.nombre.value.trim();
    const telefono = form.telefono.value.trim();
    const direccion = form.direccion.value.trim();
    const metodoPago = form.pago.value;

    if (!nombre || !telefono || !direccion || !metodoPago) {
      errorMsg.textContent = "Por favor, complete todos los campos.";
      return;
    }

    errorMsg.textContent = "";

    // Aquí puedes enviar los datos a un servidor si es necesario
    alert(`¡Gracias, ${nombre}! Su pedido será enviado a:\n${direccion}\nMétodo de pago: ${metodoPago}`);
    
    form.reset();
  });
</script>

</body>
</html>
