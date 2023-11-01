<?php
//capturamos los valores de nuestra base de datos
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Corrreo = $_POST['Corrreo'];
$Contraseña = $_POST['Contraseña'];
$Ciudad = $_POST['Ciudad'];
$Genero = $_POST['Genero'];
$Numero = $_POST['Numero'];
$Empresa = $_POST['Empresa'];
//incluimos la coneccion de php
include "conectionbd.php";
//insertamos a la base de datos(capturando)
$insertarUsuario = "INSERT INTO personas (Nombre, Apellidos, Corrreo, Contraseña, Ciudad, Genero) VALUES ('$Nombre', '$Apellidos', '$Corrreo', '$Contraseña', '$Ciudad', '$Genero')";
//aqui mandamos la cadena de arriba al servidor
$ejecutando = mysqli_query($conexion, $insertarUsuario);
//insertando datos en en mi tabla de telefonos
if($ejecutando == 1){
    $insertarTelefonos = "INSERT INTO telefonos (Numero, Empresa) VALUES ('$Numero', '$Empresa')";
    $ejecutando2 = mysqli_query($conexion, $insertarTelefonos);
    if($ejecutando2){
        header('location: ../registro.php');
    }else{
        echo"No se guardaron los datos del telefono";
    }
}else{
    echo"El cliente ya exixte";
}

$conexion -> close();
?>