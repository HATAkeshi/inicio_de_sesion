<?php
//capturamos los valores de nuestra base de datos
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Corrreo = $_POST['Corrreo'];
$Contraseña = $_POST['Contraseña'];
$Ciudad = $_POST['Ciudad'];
$Genero = $_POST['Genero'];
$Numero = $_POST['Numero'];
//incluimos la coneccion de php
include "conectionbd.php";
//insertamos a la base de datos(capturando)
$insertar = "INSERT INTO personas (Nombre, Apellidos, Corrreo, Contraseña, Ciudad, Genero, Numero) VALUES ('$Nombre', '$Apellidos', '$Corrreo', '$Contraseña', '$Ciudad', '$Genero', '$Numero')";
//comprobamos la imformacion
if ($conexion -> query($insertar) == true){
    header('location: ../registro.php');
}else{
    echo "No se guardo la informacion";
}
$conexion -> close();
?>