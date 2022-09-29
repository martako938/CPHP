'use strict'

//Condicionales
//IF
//Si A es Igual a B haz algo

var edad = 77;
var nombre = 'Brayan C';

/*
//Operadores relacionales
    Mayor: >
    Menor: <
    Mayor o igual: >=
    Menor o igual: <=
    Igual: ==
    Distinto: !=
*/

if (edad >= 18){
    //Es mayor de edad
    console.log(nombre+" tiene "+edad+" años, es mayor de edad");
    if(edad <= 33){
        console.log("Todavia eres millenial");
    }else if(edad >= 70){
        console.log("Eres anciano");
    }else{
        console.log("Ya NO eres millenial");
    }
}else{
    //Es menor de edad
    console.log(nombre+" tiene "+edad+" años, es MENOR de edad");
}

/*
//Operadores lógicos
AND(Y): &&
OR(O): ||
Negación: !
*/

var year =2028;
//Negación
if(year != 2016){
    console.log("El año no es 2016, realmente es: "+year);
}

//AND
if(year >= 2000 && year <= 2020 && year != 2018){
    console.log("Estamos en la era actual");
}else{
    console.log("Estamos en la era post moderna");
}

//OR
if(year == 2008 || (year >= 2018 && year == 2028)){
    console.log("El año acaba en 8");
}else{
    console.log("Año NO registrado");
}




