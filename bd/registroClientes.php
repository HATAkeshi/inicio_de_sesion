<?php
//capturamos los valores de nuestra base de datos
$Nombre = $_POST['Nombre'];
$Apellidos = $_POST['Apellidos'];
$Corrreo = $_POST['Corrreo'];
$Contraseña = $_POST['Contraseña'];
$Ciudad = $_POST['Ciudad'];
$Genero = $_POST['Genero'];
$Edad = $_POST['Age'];
//incluimos la coneccion de php
include "conectionbd.php";
//insertamos a la base de datos(capturando)
$insertarUsuario = "INSERT INTO personas (Nombre, Apellidos, Corrreo, Contraseña, Ciudad, Genero, Edad) VALUES ('$Nombre', '$Apellidos', '$Corrreo', '$Contraseña', '$Ciudad', '$Genero', $Edad)";
//aqui mandamos la cadena usuario al servidor
$ejecutando = mysqli_query($conexion, $insertarUsuario);
//capturamos el id de usuario
$id_usuario = mysqli_insert_id ($conexion);
//verificamos si se han insertado datos de el usuario y recien insertamos datos del telefono de la tabla de telefonos
if($ejecutando == 1){
    //creamos un arreglo para guardar los numeros y las empresas
    $numeros = array();
    $empresas = array();
    //recorremos los inputs que empiezan con "Numero" y los guardamos en el arreglo de numeros
    foreach($_POST as $key => $value){
        if(strpos($key, "Numero") === 0){
            $numeros[] = $value;
        }
    }
    //recorremos los inputs que empiezan con "Empresa" y los guardamos en el arreglo de empresas
    foreach($_POST as $key => $value){
        if(strpos($key, "Empresa") === 0){
            $empresas[] = $value;
        }
    }
    //creamos una sentencia preparada para insertar los datos en la tabla de telefonos
    $insertarTelefonos = $conexion->prepare("INSERT INTO telefonos (id_usuario, Numero, Empresa) VALUES (?, ?, ?)");
    //asociamos los parametros con los valores del arreglo
    $insertarTelefonos->bind_param("iss", $id_usuario, $numero, $empresa);
    //recorremos los arreglos de numeros y empresas y ejecutamos la sentencia para cada par
    for($i = 0; $i < count($numeros); $i++){
        $numero = $numeros[$i];
        $empresa = $empresas[$i];
        $insertarTelefonos->execute();
    }
    //cerramos la sentencia
    $insertarTelefonos->close();
    //refirigimos a formularios
    header('location: ../registro.php');
}else{
    echo"El cliente ya exixte";
}

$conexion -> close();
?>