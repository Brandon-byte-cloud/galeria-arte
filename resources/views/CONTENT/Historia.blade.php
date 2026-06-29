<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/historia.css') }}">
    <title>Historia</title>
</head>
<body>

<div class="Grid">
        
    <header class="titulo">
        <h1>Historia</h1>
    </header>
    
    <!-- INTRODUCCIÓN -->
    <section class="seccion">
        <h2>Humanidad en la historia</h2>
        
        <p>
            Desde los primeros tiempos, el arte ha acompañado al ser humano como una forma de expresión, comunicación y registro cultural. 
            A través de esculturas, pinturas y construcciones, las civilizaciones han dejado evidencia de su forma de vida, creencias y avances.
            El arte ha evolucionado con el tiempo, reflejando cambios sociales, religiosos y científicos en cada época.
        </p>
    </section>
    
    <!-- ROMA Y EGIPTO -->
    <section class="contenedor-dos">
        
        <div class="caja roma">
            <h2>Roma</h2>
            
            <p>
                El arte romano se caracterizó por su realismo y su influencia de la cultura griega. 
                Se enfocó en retratar la vida cotidiana, los líderes políticos y las escenas históricas.
            </p>
            
            <h3>Esculturas</h3>
            <p>
                Las esculturas romanas eran muy detalladas y buscaban representar fielmente a las personas.
            </p>
            
            <img src="{{ asset('img/escultura de roma.jpg') }}" alt="Escultura romana">
            
            <h3>Escultores</h3>
            <p>
                Muchos escultores romanos eran anónimos, pero se sabe que trabajaban para el Estado y los emperadores.
            </p>
            
        </div>
        
        <div class="caja">
            <h2>Egipto</h2>
            
            <p>
                El arte egipcio estaba profundamente ligado a la religión y la vida después de la muerte.
                Sus esculturas representaban dioses, faraones y figuras importantes.
            </p>
            
            <h3>Esculturas</h3>
            <p>
                Se caracterizaban por su rigidez, simetría y postura frontal.
            </p>
            
            <img src="{{ asset('img/escultura de egipto.jpg') }}" alt="Escultura egipcia">
            
            <h3>Escultor conocido</h3>
            <p>
                Uno de los artistas más importantes fue Imhotep, arquitecto y escultor de la pirámide escalonada.
            </p>

            <div id="egipto_imagen">
                <img src="{{ asset('img/escultor egepcio.jpg') }}" alt="escultor de egipto">
            </div>
        </div>
        
    </section>
    
    <!-- RENACIMIENTO -->
    <section class="seccion renacimiento">
        <h2>Renacimiento</h2>
        
        <p>
            El Renacimiento fue una época de gran avance artístico que surgió en Europa. 
            Se enfocó en el ser humano, la ciencia y el estudio de la naturaleza.
        </p>
        
        <div class="renacimiento-contenedor">
            
            <div class="ren-box">
                <h3>Nuevas técnicas</h3>
                <p>
                    Se desarrollaron técnicas como la perspectiva, el claroscuro y el uso del óleo.
                </p>
                <img src="{{ asset('img/perspectiva.jpg') }}" alt="imagen de la perspectiva">
            </div>
            
            <div class="ren-box">
                <h3>Artistas importantes</h3>
                <p>
                    Destacaron Leonardo da Vinci, Miguel Ángel y Rafael.
                </p>
                <img src="{{ asset('img/leonardo davinchi.jpf.webp') }}" alt="leonardo davinchi">
            </div>
            
            <div class="ren-box">
                <h3>Cambio de pensamiento</h3>
                <p>
                    El arte dejó de ser solo religioso y comenzó a centrarse en el ser humano.
                </p>
                <img src="{{ asset('img/cambio de pensaminto renacentista.jpg') }}" alt="hombre vitrubio">
            </div>
            
        </div>
    </section>
    
    <a href="/que-es-arte" id="boton">¿Que es arte?</a>

</div>

</body>
</html>