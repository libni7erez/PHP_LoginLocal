<?php

//De esta manera recuperamos los datos por el metodo post.
//Se le  agrega filtro para eliminar codigos maliciosos
$usuario = $_POST ['p_username'];
$usuario= addslashes($usuario);
$usuario= strip_tags($usuario);

$contrasena = $_POST ['p_password'];
$contrasena= addslashes($contrasena);
$contrasena= strip_tags($contrasena);

//Conexion con la BASE DE DATOS
//CODIGO PENDIENTE

//Manera de comprobación Manual
if($usuario =='armando' && $contrasena=='12345'){
    echo "Tus credenciales son las Correctas";   
}
else{
    //echo "Intenta Ingresar tus nuevas credenciales";
//redireccionar a la pagina de inicio
    define('PAGINA_INICIO','login.php?mensaje=mensaje_error');
    header('Location: '.PAGINA_INICIO); //Acá redireccionamos a donde queremos con header
    
}





