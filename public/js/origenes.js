const imagenes = [
    "/img/pintura-rupestre.jpg", 
    "/img/Cuevas de Lascaux.jpg",
    "/img/porque es importante.jpg",
    "/img/materiales rupestres.jpg"
];

const textos = [

`La pintura rupestre es una forma de arte prehistórico que consiste en representaciones pictóricas realizadas sobre las superficies rocosas de cuevas, abrigos y acantilados. Estas imágenes, creadas por las primeras comunidades humanas hace miles de años, incluyen figuras de animales, humanos, escenas de caza y símbolos abstractos. Los pigmentos utilizados suelen ser de origen natural, como minerales, tierra y carbón vegetal.`,

`<strong>1. Cuevas de Lascaux</strong>: Ubicadas en el suroeste de Francia, las Cuevas de Lascaux son conocidas como "la Capilla Sixtina prehistórica". Estas cuevas contienen más de 600 pinturas que representan una variedad de animales, como ciervos, caballos y toros. Se estima que estas pinturas tienen alrededor de 17,000 años de antigüedad y son consideradas una de las máximas expresiones del arte paleolítico

<strong>2. Cueva de Altamira</strong>: La Cueva de Altamira, situada en Cantabria, España, es famosa por sus pinturas de bisontes que datan de aproximadamente 14,000 años. Este sitio fue descubierto en 1868 y es conocido por su técnica de pintura que utiliza pigmentos naturales. Las representaciones en la cueva son un ejemplo sobresaliente de la habilidad artística de los hombres prehistóricos y han sido declaradas Patrimonio de la Humanidad por la UNESCO.`,

`Las pinturas rupestres son testimonios de la creatividad humana que datan de hace miles de años. Estas obras de arte, encontradas en cuevas y rocas, no solo son representaciones visuales de la fauna y la vida cotidiana de los pueblos antiguos, sino que también reflejan sus creencias, rituales y la relación que tenían con su entorno. Conservar estas pinturas es crucial para entender nuestra historia y herencia cultural.`,

`Los artistas prehistóricos demostraban materiales y técnicas para crear sus obras. Los pigmentos naturales utilizados provenían principalmente de los siguientes materiales: Estos pigmentos se aplicaban de diversas formas:

<strong>* Óxidos minerales:</strong> ocre rojo y amarillo, hematita, limonita.
<strong>* Carbón vegetal:</strong> para tonos negros.
<strong>* Caolín y creta:</strong> para blancos.
<strong>* Óxidos de manganeso:</strong> para tonos marrones y negros.

Estos pigmentos se aplicaban de diversas formas como en pintura directa con los dedos o palmas de las manos y el uso de pinceles rudimentarios hechos de pelo animal o fibras vegetales`
];

function mostrarContenido(indice){

     document.getElementById("imagen").src = imagenes[indice];

    document.getElementById("texto").innerHTML = textos[indice].replace(/\n/g, '<br>');

}