<?php
$tarjetas = [

    [
        "ruta" => "/origenes",
        "imagen" => "cueva prehistorica.jpg",
        "alt"=>"origenes",
        "titulo" => "Orígenes",
        "descripcion" => "Aquí podrás descubrir cómo nació el arte en la prehistoria, desde las pinturas rupestres hasta sus primeras formas de expresión.",
        "clase"=>"origenes"

    ],

    [
        "ruta" => "/historia",
        "imagen" => "Historia.jpg",
        "alt"=>"Historia",
        "titulo" => "Historia",
        "descripcion" => " Explora la evolución del arte a través de grandes civilizaciones como Roma, Egipto y el Renacimiento.",
        "clase"=>"historia"
    ],
    [
        "ruta" => "/que-es-arte",
        "imagen" => "que_es_arte.jpg",
        "alt"=>"que_es_arte",
        "titulo" => "¿Qué es arte?",
        "descripcion" => "Aprende qué significa el arte y conoce sus diferentes tipos como la música, la danza, la literatura y más.",
        "clase"=>"que_es"
    ],
    [
        "ruta" => "/que_se_puede_considerar_arte",
        "imagen" => "que se pude considerar arte.jpg",
        "alt"=>"¿que se puede considerar arte?",
        "titulo" => "¿Qué se puede considerar arte?",
        "descripcion" => "Descubre cómo el concepto de arte ha cambiado y cómo hoy en día casi cualquier idea o expresión puede ser arte.",
        "clase"=>"considerar"
    ]
];
function generarTarjeta($ruta, $imagen, $alt, $titulo, $descripcion) {
    $urlRuta = url($ruta);
    $urlImagen = asset('img/'.$imagen);

    echo "
            <a href='$urlRuta'>
                <img src='$urlImagen' alt='$alt'>
            </a>
            <p class='informacion'>$titulo</p>
            <p class='transicion-tarjeta'>$descripcion</p>
     
    ";
}

