<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Orígenes</title>
    <link rel="stylesheet" href="{{ asset('css/origenes.css') }}">
</head>

<body>

<header>
    <h1 class="titulo">ORÍGENES</h1>
</header>

<main>

    <section class="intro">
        <h2>Los orígenes del arte</h2>
        <p>
            Las primeras manifestaciones artísticas surgieron en la prehistoria, cuando los seres humanos comenzaron a
            representar su entorno a través de dibujos y símbolos. En las cavernas, se realizaban pinturas de animales,
            escenas de caza y figuras abstractas, utilizando pigmentos naturales. Estas expresiones no solo tenían un
            valor estético, sino que también cumplían funciones rituales, comunicativas y sociales.
        </p>
    </section>

    <section class="contenido">

        <div class="contenedor-interactivo">

            <h2>Pinturas rupestres</h2>

            <figure class="contenido-dinamico">
                <img id="imagen" src="{{ asset('img/pintura-rupestre.jpg') }}" alt="Pintura rupestre prehistórica en una cueva">
            </figure>

            <nav class="menu">
                <ul>
                    <li onclick="mostrarContenido(0)">¿Qué son las pinturas rupestres?</li>
                    <li onclick="mostrarContenido(1)">Ejemplos famosos</li>
                    <li onclick="mostrarContenido(2)">¿Por qué eran importantes?</li>
                    <li onclick="mostrarContenido(3)">¿Qué materiales usaban?</li>
                </ul>
            </nav>

            <article id="texto">
                <p>
                    La pintura rupestre es una forma de arte prehistórico que consiste en representaciones pictóricas realizadas sobre las superficies rocosas de cuevas, abrigos y acantilados. Estas imágenes, creadas por las primeras comunidades humanas hace miles de años, incluyen figuras de animales, humanos, escenas de caza y símbolos abstractos. Los pigmentos utilizados suelen ser de origen natural, como minerales, tierra y carbón vegetal.
                </p>
            </article>

        </div>

    </section>

</main>

<footer>
    <a href="{{ url('/historia') }}" id="boton">Siguiente: Historia →</a>
</footer>

<script src="{{ asset('js/origenes.js') }}"></script>

</body>
</html>