'use strict'
/*Que nos diga si un numero es par o impar

1 Ventana prompt
2 Si no es valido que nos pida de nuevo el numero
*/

var numero = parseInt(prompt("Introduce el número",0));

while(numero <= 0 || isNaN(numero) ){
    numero = parseInt(prompt('Introduce de nuevo el número',0));
}
document.write("<h3>El número "+numero+" es: </h3>");

if(numero%2 != 0){
    document.write(" Impar </br>"); /* alert("Es un número impar");*/
}else{
    document.write(" Par </br>");  /* alert("Es un número par");*/
}
    
