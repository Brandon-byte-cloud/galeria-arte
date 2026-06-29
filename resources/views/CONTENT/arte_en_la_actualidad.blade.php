<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/arte_en_la_actualidad.css') }}">
    <title>Arte en la actualidad</title>
</head>

<body>
    <div class="Grid">
        <header id="titulo">
            <h1>El arte en la actualidad</h1>
        </header>

        <section class="intro">
            <h2>El arte en la actualidad</h2>

            <p>
                El arte actual está transformándose por los cambios sociales, culturales y tecnológicos.
                Hoy no se limita a museos o galerías, sino que también está presente en espacios digitales,
                redes sociales y entornos virtuales.
            </p>

            <p>
                Gracias a la tecnología han surgido nuevas formas como el arte digital,
                el arte interactivo y el arte generado por inteligencia artificial.
                Estas expresiones permiten una mayor participación del espectador.
            </p>

            <p>
                Además, el arte contemporáneo trata temas actuales como identidad,
                medio ambiente, política y diversidad cultural.
            </p>
        </section>

        <section class="tipos">
            <div class="decoracion">
                <img src="{{ asset('img/imgen digital.png') }}" alt="arte digital">
                <h3>Arte digital</h3>
                <p>Uso de herramientas tecnológicas, software y plataformas virtuales para crear obras.</p>
            </div>

            <div class="decoracion">
                <img src="{{ asset('img/Arte urbano.png') }}" alt="arte urbano">
                <h3>Arte urbano</h3>
                <p>Incluye grafitis, murales y expresiones visuales en espacios públicos.</p>
            </div>

            <div class="decoracion">
                <img src="{{ asset('img/arte_musical.jpg') }}" alt="arte audiovisual">
                <h3>Arte audiovisual</h3>
                <p>Incluye cine, videoarte y contenido multimedia en plataformas digitales.</p>
            </div>
        </section>

        <h2 id="evolucion" style="text-align: center; margin-bottom: 30px;">
            Evolución del arte en la historia
        </h2>

        <div class="d-flex justify-content-center">
            <div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
                
                <div class="carousel-inner">
                    
                    <div class="carousel-item active" data-bs-interval="10000">
                        <img src="{{ asset('img/cueva_fondo_origenes.jpg') }}" class="d-block w-100" alt="">
                    </div>

                    <div class="carousel-item" data-bs-interval="2000">
                        <img src="{{ asset('img/escultura de roma.jpg') }}" class="d-block w-100" alt="">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/Monna Lisa.jpg') }}" class="d-block w-100" alt="">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/Captura de pantalla 2026-02-20 094631.jpg') }}" class="d-block w-100" alt="">
                    </div>

                    <div class="carousel-item">
                        <img src="{{ asset('img/actualidad.jpg') }}" class="d-block w-100" alt="">
                    </div>

                </div>

                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                </button>

                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
                    <span class="carousel-control-next-icon"></span>
                </button>

            </div>
        </div>

        <a href="/" class="boton">inicio</a>
        <a href="/buscar-obras" class="boton num2">¿Dónde están los cuadros?</a>

    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>