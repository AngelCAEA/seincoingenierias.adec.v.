<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Error 404</title>
    <link rel="stylesheet" href="/css/app.css">
    <script src="/js/app.js" defer></script>
    <script src="https://unpkg.com/scrollreveal"></script>
</head>
<body>
    <div class="container">
        <div class="text-center p-3">   
            <img src="/img/error.png" alt="404" class = "mb-2" height="200px">
                <div class="bg-info p-3 rounded">
                       <img src="/img/desconectar.png" alt="desconectar" height="150px">
                        <h1 class="fw-bold mt-4">PAGINA NO ENCONTRADA</h1>
                       <h3>No se pudo encontrar la pagina que solicitaste</h3>
                       <a  class="btn btn-outline-dark shadow-sm mt-2" href="{{route('inicio')}}">Volver a Inicio</a>
                </div>
    
        </div> 
    </div>

</body>
</html>

