<!DOCTYPE html>
<html>
<head>
    <title>Nuevo Mensaje de Contacto</title>
</head>
<body style="font-family: Arial, sans-serif; line-height: 1.6;">
    <h2>Has recibido un nuevo mensaje desde el formulario de contacto de Proserma</h2>
    <p>A continuación se detallan los datos del remitente:</p>
    <hr>
    <p><strong>Nombre:</strong> {{ $data['name'] }}</p>
    <p><strong>Email:</strong> {{ $data['email'] }}</p>
    <p><strong>Empresa:</strong> {{ $data['empresa'] ?? 'No especificada' }}</p>
    <hr>
    <h3>Mensaje:</h3>
    <p>
        {{ $data['message'] }}
    </p>
</body>
</html>