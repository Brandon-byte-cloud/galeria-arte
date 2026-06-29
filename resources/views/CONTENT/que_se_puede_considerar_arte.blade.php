<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/que_se_puede_considerar_arte.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <title>¿Qué se puede considerar arte?</title>
</head>

<body>
    <header id="titulo">
        <h1>¿Qué se puede considerar arte?</h1>
    </header>

    <!-- INTRODUCCIÓN -->
    <section id="intro">
        <h2>¿Todo puede ser arte?</h2>
        <p>
            En la actualidad, el concepto de arte se ha ampliado considerablemente. Antes, el arte se asociaba únicamente con pinturas, esculturas y obras realizadas con técnicas tradicionales. Sin embargo, hoy en día se reconoce que el arte puede manifestarse en múltiples formas, incluyendo ideas, experiencias, sonidos, movimientos e incluso objetos cotidianos.
        </p>
        <p>
            El arte no depende únicamente de la belleza o la técnica, sino también del significado, la intención y la emoción que transmite. Una obra puede ser considerada arte cuando logra comunicar un mensaje, provocar una reacción emocional o representar una visión del mundo.
        </p>
        <p>
            Por esta razón, surgieron corrientes modernas que cambiaron la forma de entender el arte, como el arte conceptual y el arte abstracto, que se centran más en la idea y la expresión que en la representación realista.
        </p>
    </section>

    <div id="tipos">

        <!-- ARTE CONCEPTUAL -->
        <div class="tarjeta conceptual">
            <div class="accordion" id="accordionConceptual">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#conceptualOne">
                            <h5>Arte conceptual</h5>
                        </button>
                    </h2>

                    <div id="conceptualOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <p style="text-align: left;"><strong>¿Qué es?</strong></p>
                                <p>
                                    El arte conceptual se enfoca principalmente en la idea o el mensaje detrás de la obra. En este tipo de arte, lo más importante no es la apariencia visual, sino el concepto que el artista desea transmitir.
                                </p>
                                <p>
                                    Puede utilizar objetos cotidianos, textos, fotografías o instalaciones. Muchas veces busca provocar reflexión en el espectador más que generar una experiencia estética tradicional.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#conceptualTwo">
                            <h5>CARACTERISTICAS</h5>
                        </button>
                    </h2>

                    <div id="conceptualTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <ul>
                                    <li>Prioriza la idea sobre la estética</li>
                                    <li>Invita a la reflexión</li>
                                    <li>Puede usar cualquier objeto</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#conceptualThree">
                            <h5>EJEMPLO</h5>
                        </button>
                    </h2>

                    <div id="conceptualThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <img src="{{ asset('img/Captura de pantalla 2026-02-20 094610.jpg') }}" alt="Arte conceptual">
                                <p class="ejemplo">Ejemplo: obra de Duchamp</p>
                                <p>
                                    Esta obra es un urinario presentado como arte, lo que revolucionó la idea de que cualquier objeto puede convertirse en arte si el artista le da un significado.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <!-- ARTE ABSTRACTO -->
        <div class="tarjeta abstracto">
            <div class="accordion" id="accordionAbstracto">

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#abstractoOne">
                            <h5>ARTE ABSTRACTO</h5>
                        </button>
                    </h2>

                    <div id="abstractoOne" class="accordion-collapse collapse show">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <p style="text-align: left;"><strong>¿Qué es?</strong></p>
                                <p>
                                    El arte abstracto no representa objetos reales ni figuras reconocibles. En su lugar, utiliza colores, formas, líneas y texturas para expresar emociones, ideas o sensaciones.
                                </p>
                                <p>
                                    Este tipo de arte se enfoca en la percepción y en la interpretación personal del espectador. No busca imitar la realidad, sino crear una experiencia visual basada en la libertad creativa.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#abstractoTwo">
                            <h5>CARACTERÍSTICAS</h5>
                        </button>
                    </h2>

                    <div id="abstractoTwo" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <ul>
                                    <li>No representa la realidad de forma directa</li>
                                    <li>Uso de colores, líneas y formas libres</li>
                                    <li>Expresa emociones y sensaciones</li>
                                    <li>Permite múltiples interpretaciones</li>
                                    <li>No sigue reglas estrictas de representación</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#abstractoThree">
                            <h5>EJEMPLO</h5>
                        </button>
                    </h2>

                    <div id="abstractoThree" class="accordion-collapse collapse">
                        <div class="accordion-body">
                            <div class="tarjeta">
                                <img src="{{ asset('img/Captura de pantalla 2026-02-20 094631.jpg') }}" alt="Arte abstracto">
                                <p class="ejemplo">
                                    Ejemplo: obras de Kandinsky, uno de los principales representantes del arte abstracto.
                                </p>
                                <p>
                                    Sus obras se caracterizan por el uso de colores vibrantes y composiciones dinámicas que buscan transmitir emociones sin representar objetos reales.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </div>

    <div>
        <a href="/arte-en-la-actualidad" id="boton">Arte en la actualidad</a>
    </div>

    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
</body>
</html>