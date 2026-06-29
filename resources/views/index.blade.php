@php include public_path('php/secciones.php'); @endphp

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/estilos.css') }}">
    <script src="{{ asset('js/jquery-4.0.0.js') }}"></script>
    <title>Document</title>
</head>

<body>
    <div class="fondo-oscuro"></div>
    <h1 id="titulo">El arte de la humanidad</h1>
    
    <section class="introduccion">
        <h2>Desde la piedra hasta la actualidad en el arte</h2>
        <p>Desde los inicios de la humanidad, el arte ha sido una forma esencial de expresión. A través de imágenes, sonidos, palabras y movimientos, los seres humanos han buscado comunicar ideas, emociones y experiencias. El arte no solo refleja la creatividad humana, sino también la historia, la cultura y la forma en que cada sociedad entiende el mundo. 
            Esta se puede encontrar en muros, hojas, madera, hasta en la parte digital.
        </p>
    </section>

    <h3 class="subtitulo">Explora el arte a través del tiempo</h3>
    <div class="transicion">
        <p>Explora la evolución del arte. Haz clic en cada imagen para saber su información; también puedes pasar el mouse o presionar el título para ver una breve introducción.</p>
    </div>
   
<section class="contenedor">
    @php
        foreach($tarjetas as $t) {
            echo '<div class="tarjeta ' . ($t['clase'] ?? '') . '">';
            generarTarjeta($t["ruta"], $t["imagen"], $t["alt"], $t["titulo"], $t["descripcion"]);
            echo '</div>';
        }
    @endphp

</section>

    <div class="actual">
        <a href="{{ url('/arte-en-la-actualidad') }}">
            <img src="{{ asset('img/actualidad.jpg') }}" alt="arte en la actualidad">
        </a>
        <p class="informacion">Arte en la actualidad</p>
        <p class="transicion-tarjeta">
            Aquí mirarás cómo está el arte actualmente, en el que usan dibujo digital, arte urbano y otros tipos de artes que están actualmente.
        </p>
    </div>  

<script src="{{ asset('js/funcion_pagina.js') }}"></script>
</body>
</html>