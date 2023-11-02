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
//aqui mandamos la cadena usuario al servidor
$ejecutando = mysqli_query($conexion, $insertarUsuario);
//capturamos el id de usuario
$id_usuario = mysqli_insert_id ($conexion);
//verificamos si se han insertado datos de el usuario y recien insertamos datos del telefono de la tabla de telefonos
if($ejecutando == 1){
    //insertando datos en en mi tabla de telefonos
    $insertarTelefonos = "INSERT INTO telefonos (id_usuario, Numero, Empresa) VALUES ('$id_usuario', '$Numero', '$Empresa')";
    //ahora si insertamos los datos a nuestra tabla de telefonos 
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