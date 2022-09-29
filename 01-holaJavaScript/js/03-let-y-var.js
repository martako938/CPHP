'use strict'
//Pruebas con let y var

//prueba con var
var numero = 50;//valor 50
console.log(numero); //valor 50

if(true){
	var numero = 60;
	console.log(numero); //valor 60
}

console.log(numero); //valor 60


//prueba con let

var texto = "Proyecto SM8 Sistemas Brayan Cabrera";
console.log(texto); //valor Proyecto Sm8

if (true) {
	let texto = "Proyecto Front SM8 Raul C";
	console.log(texto); //valor Front SM8
}
console.log(texto); //valor Proyecto Sm8 
