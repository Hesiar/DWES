
// Ejercicio 1: Variables y Operadores

let a = 10;
let b = 20;

let suma = a + b;

console.log("La suma de a y b es: " + suma);

// 1. ¿Qué otros operadores podrías usar en lugar de + (suma)?
// Se podrian usar los operadores de resta, multiplicacion y/o division, por poner un ejemplo

let resta = a - b;
let multiplicacion = a * b;
let division = a / b;

// Ejercicio 2: Condicionales

let edad = 30;

if(edad >= 18){
    console.log("Eres mayor de edad");
} else{
    console.log("Eres menor de edad");
}

//¿Cómo podrias expandir este código para tener más de dos condiciones?
// Podria usar else-if
// Ejemplo de uso de else-if:
if(edad >= 18){
    console.log("Eres mayor de edad");
    } else if(edad < 13){
        console.log("Eres un niño/a");
        } else if(edad >= 13){
            console.log("Eres adolescente");
            }

// Ejercicio 3: Funciones

function saludar(nombre){
    console.log("Hola, " + nombre + "!");
}

saludar("Francisco");

// 1. ¿Cómo podrías modificar la función para que devuelva un salido en lugar de mostrarlo directamente en la consola?

function saludar(nombre) {
    return "Hola, " + nombre + "!";
}

let saludo = saludar("Francisco");
console.log(saludo);

// 2. ¿Cómo podrías usar la función para que devuelva un saludo en lugar de mostrarlo directamente en la consola?

function saludar(nombre) {
    return "Hola, " + nombre + "!";
}

let nombres = ["Francisco", "María", "Juan"];
for (let i = 0; i < nombres.length; i++) {
    let saludo = saludar(nombres[i]);
    console.log(saludo);
}


// Ejercicio 4: Bucles

for (let i = 1; i <= 10; i++){
    console.log(i);
}

for (let i = 1; i <= 10; i++){
    if(i % 2 === 0){
        console.log(i);
    }
}

// Imprimir solo impares

for (let i = 1; i <= 10; i++){
    if(i % 2 != 0){
        console.log(i);
    }
}

// Bucle while

let i = 1;
while (i <= 10) {
    if (i % 2 != 0) {
        console.log(i); 
    }
    i++;
}

// Ejercicio 5: Arrays

let frutas = ["Manzana", "Banana", "Pera"];
console.log("Primera fruta: " + frutas[0]);
frutas.push("Naranja");

for (let i = 0; i< frutas.length; i++){
    console.log(frutas[i]);
}

//¿Cómo podrias eliminar la primra fruta del array?

frutas.splice(0);

// Ordenalo alfabeticamente

frutas.sort();

// Ejercicio 6: Objetos

let persona = {
    nombre: "María",
    edad: 25,
    ciudad: "Madrid"
};

console.log("Nombre: " + persona.nombre);
persona.edad =26;
persona.proesion = "Desarrolladora";

//Eliminar una propiedad del objeto

delete persona.ciudad;


//Combinar varios objetos para crear lista personas

let persona2 = {
    nombre: "Carlos",
    edad: 30,
    profesion: "Ingeniero"
};

let persona3 = {
    nombre: "Lucía",
    edad: 28,
    profesion: "Doctora"
};

let listaPersonas = [persona, persona2, persona3];

for (let i = 0; i < listaPersonas.length; i++) {
    console.log("Persona " + (i + 1) + ": ");
    console.log("Nombre: " + listaPersonas[i].nombre);
    console.log("Edad: " + listaPersonas[i].edad);
    console.log("Profesión: " + listaPersonas[i].profesion);
}

// Ejercicio 7: Eventos del DOM

/*<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initialscale=
1.0">
<title>Ejercicio de Eventos</title>
</head>
<body>
<button id="miBoton">Haz clic aquí</button>
<script src="script.js"></script>
</body>
</html>

JavaScript (en script.js):

document.getElementById("miBoton").addEventListener("click",
function() {
console.log("El botón ha sido presionado.");
});
*/

// 1. Modificar el texto del botón cuando se hace clic

// Se puede modificar el texto del botón accediendo a la propiedad innerHTML o textContent del botón en el manejador del evento click.

// 2. Cambiar el color del fondo del documento al hacer click en el boton

// Puedes modificar el color de fondo del documento cambiando el valor de la propiedad backgroundColor de document.body.style.

// Ejercicio 8: Validación de Formularios

/*
<form id="miFormulario">
Nombre: <input type="text" id="nombre"><br>
Edad: <input type="number" id="edad"><br>
<input type="submit" value="Enviar">
</form>
<p id="mensaje"></p>
<script src="script.js"></script>

JavaScript (en script.js):

document.getElementById("miFormulario").addEventListener("submit",
function(event) {
event.preventDefault();
let nombre = document.getElementById("nombre").value;
let edad = document.getElementById("edad").value;
let mensaje = "";
if (nombre === "") {
mensaje = "El nombre no puede estar vacío.";
} else if (edad < 18) {
mensaje = "Debes ser mayor de 18 años.";
} else {
mensaje = "Formulario enviado correctamente.";
}
document.getElementById("mensaje").innerText = mensaje;
});
*/

// 1. Mostrar los mensajes de error junto a los campos que fallaron

/* Para mostrar los mensajes de error junto a los campos específicos que fallaron
la validación, podemos agregar un <span> debajo de cada campo. Luego, actualizamos 
el contenido de estos elementos con los mensajes de error correspondientes.
*/

// 2. Mejorar la validación para aceptar solo nombres con caracteres alfabéticos

/* Podemos mejorar la validación del campo nombre usando una expresión regular que 
solo acepte caracteres alfabéticos (A-Z, a-z) y espacios.
*/