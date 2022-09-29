'use strict'
/*Calculadora que pida dos numeros por pantalla
Si metemos uno mal que nos lo vuelva a pedir
Que nos muestre en el cuerpo de la pagina en una alerta 
y por consola el resultado de sumar restar multiplicar dividir esas dos cifras
*/

var numero1 = parseInt(prompt("numero 1",0));
var numero2 = parseInt(prompt("numero 2",0));

while(numero1 <0  || numero2 < 0 || isNaN(numero1) || isNaN(numero2)){
    var numero1 = parseInt(prompt("Ingresa de nuevo numero 1",0));
    var numero2 = parseInt(prompt("Ingresa de nuevo  numero 2",0));
}

var resultado = "La suma es: "+(numero1+numero2)+"</br>"+
                "La resta es: "+(numero1-numero2)+"</br>"+
                "La multiplicacion es: "+(numero1*numero2)+"</br>"+
                "La division es: "+(numero1/numero2)+"</br>";

var resultadoCMD = "La suma es: "+(numero1+numero2)+" \n"+
                "La resta es: "+(numero1-numero2)+" \n"+
                "La multiplicacion es: "+(numero1*numero2)+" \n"+
                "La division es: "+(numero1/numero2)+" \n";

document.write(resultado);
alert(resultadoCMD);