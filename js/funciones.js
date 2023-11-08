// El código JavaScript para la función que añade más inputs
// Obtener el formulario, el botón y el contador de inputs
var formulario = document.getElementById("form");
var boton = document.getElementById("add");

var div4 = document.getElementById("all");

var contador = 1;
var contador2 = 1;

// Crear una función que se ejecute al hacer clic en el botón
boton.onclick = function() {


  // Incrementar el contador
  contador ++;
  contador2 ++;
  // Crear un nuevo elemento div con la clase form-group
  var div1 = document.createElement("div");
  div1.className = "col-md-5 mt-2";

  // Crear dos nuevos elementos input con la clase form-control y el tipo text
  var input1 = document.createElement("input");
  input1.type = "text";
  input1.className = "form-control";
  // Asignar un nombre, un id y un placeholder al primer input
  input1.name = "Numero" + contador;
  input1.id = "Numero" + contador;
  input1.placeholder = "Numero " + contador;
// Añadir el input al primer div
  div1.appendChild(input1);



 // Crear un nuevo elemento div con la clase form-group
 var div2 = document.createElement("div");
 div2.className = "col-md-5 mt-2";

  // Crear el segundo input de la misma forma que el primero
  var input2 = document.createElement("input");
  input2.type = "text";
  input2.className = "form-control";
  // Asignar un nombre, un id y un placeholder al segundo input
  input2.name = "Empresa" + (contador2);
  input2.id = "Empresa" + (contador2);
  input2.placeholder = "Empresa " + (contador2);
  // Añadir el inpút segundo
  div2.appendChild(input2);



  // Crear un nuevo elemento div con la clase col-md-2
  var div3 = document.createElement("div");
  div3.className = "col-md-2 mt-2";
  // Crear un nuevo elemento button con la clase btn y el tipo button
  var button = document.createElement("button");
  button.type = "button";
  button.className = "btn btn-secondary";
  // Asignar un id y un texto al botón
  button.id = "boton" + contador;
  button.textContent = "Numeros";
  // Asignar la misma función onclick al botón
  button.onclick = boton.onclick;
  // Añadir el botón al tercer div
  div3.appendChild(button);


   // Añadir los tres divs al formulario
   div4.appendChild(div1);
   div4.appendChild(div2);
   div4.appendChild(div3);

};
