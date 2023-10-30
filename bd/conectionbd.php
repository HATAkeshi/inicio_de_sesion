<!--INICIANDO EL PHP CONNECCION CON LA BASE DE DATOS-->
<?php

//creamos la coneccion de php a la base de datos 
$server = "localhost";
$user = "root";
$pass = "79123133hata#oscar&&=79123133";
//NOMNRE DE NUESTRA BASE DE DATOS 
$db = "bddiseñoweb";
//hacemos la coneccion con la base de datos 
$conexion = new mysqli($server, $user, $pass, $db);
//comprobamos si nos conectamos 
if($conexion->connect_error){
    //die (" conexion fallida" . $conexion->connect_error);
} else{
   // echo"conectado";
}

//linea de codigo para que me acepte los caracteres especiales 
$acentos = $conexion -> query("SET NAMES 'utf8'");

//insertamos datos y los intrducimos a la base de datos
$sql = "INSERT INTO "

?>