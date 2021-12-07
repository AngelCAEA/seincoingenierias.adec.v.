<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mensaje Recibido</title>
</head>
<body>
    <div>
        <h1 class="text-center">SOLICITUD DE UNA COTIZACIÓN</h1>
        <p>Recibiste un mensaje de: {{ $msg['name']}} - {{ $msg['email'] }}</p>
        <p><strong>Asunto:</strong>una cotización para la empresa {{ $msg['company']}}</p>
        <p><strong>Telefono:</strong>  {{ $msg ['telephone']}}</p>
        <p><strong> Categoria:</strong>{{ $msg['category']}}</p>
        <p><strong>Descripción:</strong>{{ $msg['content']}}</p>
    </div>
</body>
</html>