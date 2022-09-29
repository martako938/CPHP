'use strict'
/*Mostrar todos los numeros impares que hay
entre dos numeros introducidos por el usuario*/

var numero1 = parseInt(prompt("Introduce el primer numero",0));
var numero2 = parseInt(prompt("Introduce el segundo numero",0));

document.write("<h1>De "+numero1+" a "+numero2+" estan estos números: </h1>");

for(var i = numero1; i<=numero2; i++){
    if(i%2 != 0){
        document.write(i+"</br>");
    }
    
}

/* Otra forma de haverlo con while
while(numero1 < numero2){
    numero1++;
    if(numero1%2 !=0){
        console.log("El "+numero1+" es impar");
    }
}

*/