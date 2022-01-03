<?php
include './comp/generico/sesion_cookie/comp.php';

if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {

   include "./comp/perfil/page.php";
} else {
   header("Location: ./index.php");
}
