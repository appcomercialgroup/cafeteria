<?php

if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {

} else {
   include "inicio_sesion.php";
   include "registro.php";
}

// include "recuperar.php";
