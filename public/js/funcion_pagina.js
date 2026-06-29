$(document).ready(function(){
    $(".subtitulo").click(function(){
        $(".transicion, .fondo-oscuro").fadeToggle();
    });
    $(".fondo-oscuro").click(function(){
        $(".transicion, .fondo-oscuro").hide(1000);
    });
    $(".informacion").mouseenter(function(){
     $(this).next(".transicion-tarjeta").fadeToggle(200);
    });
});