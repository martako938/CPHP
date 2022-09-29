<?php

/* 
Arrays
 * Un array es una coleccion o conujnto de datos/valores, bajo un unico nombre,
 * Para acceder a esos valores podemos usar un indice numero o alfanumerico.
 */
$pelicula = "Batman v Superman";
$peliculas = array("Avengers Endgame","Joker","El Hobbit","Sonic","Proyecto Gemini");
$cantantes = ['Luis Fonsi','McDinero','AhriKDA'];

//Ejemplo examen
$str = "Is your name O'Reilly?";

// Outputs: Is your name O\'Reilly?
echo addslashes($str);
echo "<br>";
echo "<br>";


//Array asociativo
$personas = array(
    'nombre' => 'Ana',
    'apellidos' => 'Soto',
    'web' => 'http://sm8-betasoft.ddns.net/dashboard/tickets/0'
);
var_dump($_GET);
echo $personas['apellidos'];
//var_dump($peliculas[2]);
//var_dump($cantantes);

echo "<br>";
echo $peliculas[0];
echo "<br>";
echo $cantantes[2];

//Recorrer con for

echo "<h1>Listado de peliculas</h1>";

echo "<ul>";

for($i =0 ; $i < count($peliculas); $i++){
    echo "<li>".$peliculas[$i]."</li>";   
}

echo "</ul>";

//Recorrer con Foreach
echo "<h1>Listado de cantantes</h1>";

echo "<ul>";
foreach ($cantantes as $cantante) {
    echo "<li>".$cantante."</li>";
}

echo "</ul>";

//Arrays multidimencionales
$contactos = array(
    array(
        'nombre'=> 'Antonio',
        'email' => 'www.google.com'
    ),
    array(
        'nombre'=> 'Fernando',
        'email' => 'web.whatsapp.com'
    ),
    array(
        'nombre'=> 'Cirely',
        'email' => 'www.youtube.com'
    ),
);

echo $contactos[2]['email'];

foreach ($contactos as $key => $contacto) {
    var_dump($contacto['nombre']);
}

?>

