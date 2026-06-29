<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/que_es_arte.css') }}">
    <title>¿Qué es el arte?</title>
</head>

<body>
    <div class="responsive">
        <header id="titulo"><h1>¿Qué es el arte y tipos de arte?</h1></header>

        <div class="responsive">
            
            <!-- INTRO -->
            <section class="intro">
                <p>
                    El arte ha cambiado su significado a lo largo del tiempo. En general, el arte puede entenderse como una forma de expresión que permite comunicar ideas, emociones y visiones del mundo. Existen múltiples formas de arte, cada una con un lenguaje y características propias. 
                </p>
            </section>
            
            <h2 class="titulo-seccion">Tipos de arte</h2>
            
            <!-- ARTES VISUALES -->
            <div class="parte1"> 
                <section class="seccion fondo">
                    <div class="texto">
                        <h3>Artes visuales</h3>
                        <p>
                            Las artes visuales son formas de expresión que se perciben principalmente a través de la vista.
                            Incluyen disciplinas como la pintura, la escultura, el dibujo, la fotografía y el muralismo.
                            Se basan en elementos como el color, la forma, la textura, la línea y la composición.
                            Pueden representarse en superficies planas o en estructuras tridimensionales.
                            A lo largo de la historia han reflejado distintas culturas y movimientos artísticos.
                        </p>
                        
                        <h4>Ejemplos</h4>
                        <ul>
                            <li>La Mona Lisa de Leonardo da Vinci</li> 
                            <li>Guernica de Pablo Picasso</li>
                        </ul>
                        
                        <h4>¿Por qué es arte?</h4>
                        <p>
                            Es arte porque comunica ideas, emociones y visiones del mundo mediante imágenes.
                            Permite expresar pensamientos que a veces no pueden decirse con palabras, a lo mismo que
                            despierta sensaciones distintas en cada persona que la observa.
                            Requiere creatividad, técnica y sensibilidad por parte del artista, se debe de tener la capacidad de influir en la sociedad y generar reflexión.
                            Además, representa la identidad cultural de una época o comunidad.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/Monna Lisa.jpg') }}" alt="arte visual la Monna Lisa">
                    </div>
                </section>
            </div>
            
            <!-- MUSICA -->
            <div class="parte1"> 
                <section class="seccion fondo invertido">
                    <div class="texto">
                        <h3>Música</h3>
                        <p>
                            La música es el arte de organizar sonidos y silencios en el tiempo.
                            Se compone de elementos como ritmo, melodía, armonía y timbre.
                            Puede interpretarse con instrumentos o con la voz humana.
                            Existen muchos géneros como clásica, pop, rock, jazz y música tradicional.
                            Estás entan presentes en celebraciones, ceremonias y actividades cotidianas.
                        </p>
                        
                        <h4>Ejemplos</h4>
                        <ul>
                            <li>Ludwig van Beethoven</li>
                            <li>canciones de Shakira</li>
                        </ul>
                        
                        <h4>¿Por qué es arte?</h4>
                        <p>
                            Es arte porque transmite emociones de manera directa y profunda.
                            Tiene la capacidad de unir a las personas sin importar el idioma.
                            Refleja la cultura y las tradiciones de una sociedad.
                            Requiere creatividad y dominio técnico para su composición e interpretación.
                            Puede inspirar, motivar o incluso generar cambios sociales.
                            Además, estimula la imaginación y la sensibilidad del oyente.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/arte_musical.jpg') }}">
                    </div>
                </section>
            </div> 

            <!-- DANZA -->
            <div class="parte1">
                <section class="seccion fondo">
                    <div class="texto">
                        <h3>Danza</h3>
                        <p>
                            La danza es la expresión artística que utiliza el cuerpo en movimiento.
                            Se basa en el ritmo, la coordinación y la expresión corporal.
                            Puede practicarse de forma individual o en grupo.
                            Generalmente se acompaña de música, aunque también puede realizarse en silencio.
                            Ha sido parte de rituales y celebraciones desde la antigüedad.
                        </p>
                        
                        <h4>Ejemplos</h4>
                        <ul>
                            <li>ballet</li>
                            <li>danza contemporánea</li>
                            <li>folclórica</li>
                            <li>urbana</li>
                        </ul>
                        
                        <h4>¿Por qué es arte?</h4>
                        <p>
                            Es arte porque comunica emociones mediante gestos y movimientos.
                            Permite contar historias sin necesidad de palabras.
                            Requiere disciplina, técnica y creatividad en la coreografía.
                            Transmite identidad cultural y valores tradicionales.
                            Conecta al intérprete con el público de forma visual y emocional.
                            Además, convierte el cuerpo humano en un medio de expresión estética.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/danzas.jpg') }}" alt="danzas folcloricas">
                    </div>
                </section>
            </div>

            <!-- LITERATURA -->
            <div class="parte1">
                <section class="seccion fondo invertido">
                    <div class="texto">
                        <h3>Literatura</h3>
                        <p>
                            La literatura es el arte que utiliza la palabra escrita como medio de expresión.
                            Incluye géneros como novela, cuento, poesía, teatro y ensayo.
                            Se construye mediante narraciones, diálogos y recursos literarios.
                            Permite crear mundos imaginarios o relatar hechos reales.<br>
                            Los autores más conocidos son "Don Quijote de la Mancha" de Miguel de Cervantes y "Cien años de soledad" de Gabriel García Márquez.
                            Ha sido fundamental para transmitir conocimientos y tradiciones.
                        </p>
                        <br>
                        
                        <strong>Ejemplo.</strong>
                        
                        <p class="poema">
                            El arte susurra en el silencio,<br>
                            nace en la sombra de la mente,<br>
                            es el lenguaje del sentimiento<br>
                            que el alma guarda eternamente.<br><br>
                            
                            Vive en colores, vive en palabras,<br>
                            en notas suaves que el viento lleva,<br>
                            es la memoria de la humanidad<br>
                            dibujada en la historia que se renueva.
                        </p>
                        
                        <h4>¿por qué es arte?</h4>
                        <p>
                            Es arte porque transforma el lenguaje en una herramienta creativa.
                            Expresa emociones, pensamientos y reflexiones profundas.
                            Estimula la imaginación del lector al crear imágenes mentales.
                            Permite explorar distintas perspectivas de la realidad.
                            Refleja valores culturales y contextos históricos.
                            Además, deja una huella duradera en la sociedad y la cultura.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/literatura.jpg') }}" alt="literatura">
                    </div>
                </section>
            </div>    

            <!-- CINE -->
            <div class="parte1">
                <section class="seccion fondo">
                    <div class="texto">
                        <h3>Cine y teatro</h3>
                        <p>
                            El cine es el arte de narrar historias mediante imágenes en movimiento.
                            Combina actuación, guion, música, fotografía y edición.
                            Se proyecta en salas de cine o plataformas digitales.
                            Puede ser documental, animación, drama, comedia u otros géneros.<br>
                            El teatro es el arte de representar historias en vivo ante un público.
                            Se basa en la actuación, el diálogo y la expresión corporal.
                            Utiliza escenografía, vestuario e iluminación para ambientar la obra.
                            Puede presentarse en espacios abiertos o cerrados.
                        </p>
                        
                        <h4>Ejemplos</h4>
                        <p>Películas, obras teatrales, como:</p>
                        
                        <ul>
                            <li>Titanic dirigida por James Cameron</li>
                            <li>Hamlet de William Shakespeare</li>
                        </ul>
                        
                        <h4>¿Por qué es arte?</h4>
                        <p>
                            Es arte porque integra distintas disciplinas en una sola obra.
                            Tiene la capacidad de emocionar y generar reflexión.
                            Presenta realidades sociales, históricas o imaginarias.
                            Requiere creatividad tanto en lo visual como en la narrativa.
                            Influye en la cultura y en la forma de ver el mundo.
                            Además, crea experiencias colectivas compartidas por el público.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/cine.jpg') }}">
                    </div>
                </section>
            </div>

            <!-- DIGITAL -->
            <div class="parte1">
                <section class="seccion fondo invertido">
                    <div class="texto">
                        <h3>Arte digital</h3>
                        <p>
                            El arte digital es la creación artística mediante herramientas tecnológicas.
                            Incluye ilustración digital, animación, modelado 3D y diseño gráfico.
                            Se realiza con computadoras, tabletas y programas especializados.
                            Puede difundirse en redes sociales, videojuegos o galerías virtuales.
                            Integra elementos visuales, sonoros y a veces interactivos.
                            Ha crecido con el desarrollo de la tecnología moderna.
                        </p>
                        
                        <h4>Ejemplos</h4>
                        <p>Ilustración digital, animación.</p>
                        
                        <ul>
                            <li>"EL ASCENSO DE LAS TORTUGAS NINJA" de NICKELODEON dirigida por Ant Ward y Andy Suriano</li>
                        </ul>
                        
                        <h4>¿Por qué es arte?</h4>
                        <p>
                            Es arte porque utiliza la creatividad para comunicar ideas visuales.
                            Explora nuevas formas de expresión gracias a la tecnología.
                            Permite interacción y experiencias innovadoras.
                            Requiere habilidades técnicas y sensibilidad artística.
                            Refleja la cultura digital y la sociedad contemporánea.
                            Además, amplía los límites tradicionales del concepto de arte.
                        </p>
                    </div>
                    
                    <div class="imagen">
                        <img src="{{ asset('img/arte digital.jpg') }}">
                    </div>
                </section>
            </div>    

            <div>
                <a href="/que_se_puede_considerar_arte" id="boton">
                    ¿Qué se puede considerar arte?
                </a>
            </div>
                
        </div>
    </div>
</body>
</html>