<?php

include './comp/generico/sesion_cookie/comp.php';

if (
   (isset($_SESSION['activa'])) &&
   ($_SESSION['activa'] == "si") &&
   ($_SESSION['nombre_tipo_usuario'] == "administrador")
) {

   include "./comp/admin/admin_index/page.php";
} else {
   header("Location: ./index.php");
}
