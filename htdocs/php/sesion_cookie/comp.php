<?php
session_start();

if (isset($_GET['salir']) && $_GET['salir'] == "si") {
   session_destroy();
   $url = $_SERVER['PHP_SELF'];
   header("Location: {$url}");
}

// if (isset($_POST['token_inicio'])) {

//    include "identifica_usuario.php";
//    $datos_usuario = get_datos_usuario($_POST['token_inicio']);

//    $_SESSION['activa']         = "si";
//    $_SESSION['nombre_usuario'] = $datos_usuario['nombre_usuario'];
//    $_SESSION['correo']         = $datos_usuario['correo'];
//    $_SESSION['usuario']        = $datos_usuario['usuario'];

//    unset($_POST);

// }
// echo $_SESSION['token_inicio'];
if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {
   include "./php/tipo_usuario/comp.php";

   include "identifica_usuario.php";
   $datos_usuario = get_datos_usuario($_SESSION['token_inicio']);
   $tipo_usuario  = get_tipo_usuario($datos_usuario['tipo_usuario']);

   // if ($tipo_usuario == "administrador") {
   //    // header('Location: ./admin.php');
   // }
   $_SESSION['activa']         = "si";
   $_SESSION['nombre_usuario'] = $datos_usuario['nombre_usuario'];
   $_SESSION['correo']         = $datos_usuario['correo'];
   $_SESSION['usuario']        = $datos_usuario['usuario'];
   trabajasesion("Sesión Activada");
   echo "<br/>";
   $tipo_usuario                    = get_tipo_usuario($_SESSION['tipo_usuario']);
   $_SESSION['nombre_tipo_usuario'] = $tipo_usuario;
   echo "Tipo de usuario $tipo_usuario";
   echo "<br/>";
} else {
   trabajasesion("Sesión Desactivada");
}

function trabajasesion($value = '')
{
   echo $value;
}
