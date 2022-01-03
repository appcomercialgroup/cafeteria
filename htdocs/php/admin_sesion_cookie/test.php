<?php
session_start();
include "./php/sesion_cookie/identifica_usuario.php";

include_once "./php/tipo_usuario/comp.php";
include_once "./php/sesion_cookie/identifica_usuario.php";
if (isset($_SESSION['activa']) &&
   $_SESSION['activa'] == "si"
) {
   $datos_usuario = get_datos_usuario($_SESSION['token_inicio']);
   $tipo_usuario  = get_tipo_usuario($datos_usuario['tipo_usuario']);
   if ($tipo_usuario == "administrador") {

      $_SESSION['nombre_tipo_usuario'] = $tipo_usuario;
      trabajasesion("Sesión Activada");
      echo "<br/>";
      echo $_SESSION['nombre_tipo_usuario'];
      echo "<br/>";

      // $_SESSION['activa']         = "si";
      $_SESSION['nombre_usuario'] = $datos_usuario['nombre_usuario'];
      $_SESSION['correo']         = $datos_usuario['correo'];
      $_SESSION['usuario']        = $datos_usuario['usuario'];
      include "./comp/admin/admin_index/page.php";
   } else {
      session_destroy();
      // trabajasesion("Sesión Desactivada");
      header('Location: ./index.php');
   }
} else {
   session_destroy();
   // trabajasesion("Sesión Desactivada");
   header('Location: ./index.php');
}

function trabajasesion($value = '')
{
   echo $value;
}
