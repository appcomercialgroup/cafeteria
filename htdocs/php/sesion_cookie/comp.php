<?php
session_start();
if (isset($_POST['sesion'])) {

   $_SESSION['activa'] = "si";
   unset($_POST);
   header('Location: ../../index.php');

   exit;
}

if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {
   trabajasesion("Sesión Activada");
} else {
   trabajasesion("Sesión Desactivada");
}

function trabajasesion($value = '')
{
   echo $value;
}

// session_start();
// session_unset();

// // destroy the session
// session_destroy();
