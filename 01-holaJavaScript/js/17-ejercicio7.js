'use strict'
/*Tabla de multiplicar de un numero introducido en pantalla
*/

var numero = parseInt(prompt("Introduce el número de la tabla: ",0));

document.write("<h1>Tabla del "+numero+"</h1>");
for(var i = 1; i<=10; i++){
    document.write(i+" X "+numero+" = "+(i*numero)+"</br>");
   /*alert(i+" X "+numero+" = "+(i*numero));*/
}

//Todas las tablas de multiplicar
for(var c = 1; c<=10; c++){
    document.write("<h1>Tabla del "+c+"</h1>");
    for(var i = 1; i<=10; i++){
        document.write(i+" X "+c+" = "+(i*c)+"</br>");
    }
}
