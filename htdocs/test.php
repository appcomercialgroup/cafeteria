<?php

include "./db/Conn.php";

$coneccion = new Conn;
$coneccion->set_conn();

if (condition) {
   // code...
}
// if ($coneccion) {
//    echo "Conectado";
// } else {
//    echo "Fallo la coneccion";
// }
