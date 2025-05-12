<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Formulario de Envío</title>
  <style>
    body {
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      background-color: #f0f2f5;
      padding: 40px 0;
    }

    .form-container {
      max-width: 600px;
      margin: auto;
      background-color: #ffffff;
      padding: 30px 40px;
      border-radius: 16px;
      box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
    }

    .form-group {
      margin-bottom: 20px;
    }

    label {
      display: block;
      font-weight: 600;
      margin-bottom: 6px;
      color: #333;
    }

    input[type="text"],
    input[type="tel"],
    textarea {
      width: 100%;
      padding: 12px;
      border: 1px solid #ccc;
      border-radius: 10px;
      background-color: #f9f9f9;
      transition: border-color 0.3s ease;
    }

    input:focus,
    textarea:focus {
      outline: none;
      border-color: #82b1ff;
      background-color: #fff;
    }

    .payment-options {
      display: flex;
      justify-content: space-between;
      gap: 20px;
    }

    .payment-option {
      flex: 1;
      display: flex;
      align-items: center;
      background-color: #f5f7fa;
      border: 2px solid transparent;
      padding: 15px;
      border-radius: 12px;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .payment-option:hover {
      border-color: #82b1ff;
      background-color: #eef3fc;
    }

    .payment-option input[type="radio"] {
      margin-right: 12px;
      accent-color: #4285f4;
      transform: scale(1.2);
    }

    .payment-option img {
      height: 30px;
      margin-right: 12px;
    }

    .payment-option .icon {
      font-size: 26px;
      margin-right: 12px;
    }

    .submit-btn {
      width: 100%;
      padding: 14px;
      background-color: #4285f4;
      color: white;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 10px;
      cursor: pointer;
      transition: background-color 0.3s ease;
    }

    .submit-btn:hover {
      background-color: #3367d6;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <form action="procesar_envio.php" method="POST">
      <div class="form-group">
        <label for="nombre">Nombre completo:</label>
        <input type="text" id="nombre" name="nombre" required>
      </div>

      <div class="form-group">
        <label for="telefono">Teléfono:</label>
        <input type="tel" id="telefono" name="telefono" required>
      </div>

      <div class="form-group">
        <label for="direccion">Dirección:</label>
        <textarea id="direccion" name="direccion" rows="3" required></textarea>
      </div>

      <div class="form-group">
        <label>Método de pago:</label>
        <div class="payment-options">
          <label class="payment-option">
            <input type="radio" name="metodo_pago" value="paypal" required>
            <img src="https://www.paypalobjects.com/webstatic/icon/pp258.png" alt="PayPal">
            <div>
              <strong>PayPal</strong><br>
              <small>Pago con cuenta PayPal</small>
            </div>
          </label>

          <label class="payment-option">
            <input type="radio" name="metodo_pago" value="efectivo">
            <span class="icon">💵</span>
            <div>
              <strong>Efectivo</strong><br>
              <small>Paga al recibir tu pedido</small>
            </div>
          </label>
        </div>
      </div>

      <button type="submit" class="submit-btn">Enviar pedido</button>
    </form>
  </div>

</body>
</html>
