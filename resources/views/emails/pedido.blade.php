<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Nuevo Pedido</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            color: #333;
            background-color: #fff4e5;
            padding: 20px;
        }

        .pedido-container {
            background: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        h2 {
            color: #ff9800;
            text-align: center;
        }

        .detalle {
            margin-top: 20px;
        }

        .detalle p {
            margin: 10px 0;
            line-height: 1.5;
        }

        .footer {
            margin-top: 30px;
            font-size: 0.9rem;
            text-align: center;
            color: #777;
        }
    </style>
</head>
<body>
    <div class="pedido-container">
        <h2>📦 Nuevo Pedido Recibido</h2>

        <div class="detalle">
            <p><strong>Producto:</strong> {{ $datos['producto'] }}</p>
            <p><strong>Cantidad:</strong> {{ $datos['cantidad'] }}</p>
            <p><strong>Nombre:</strong> {{ $datos['nombre'] }}</p>
            <p><strong>Teléfono:</strong> {{ $datos['telefono'] }}</p>
            <p><strong>Correo:</strong> {{ $datos['email'] }}</p>
            <p><strong>Dirección:</strong> {{ $datos['direccion'] }}</p>
        </div>

        <div class="footer">
            Este correo fue generado automáticamente por el sistema de pedidos de Solo Chifles.
        </div>
    </div>
</body>
</html>
