<?php

function FunctionName()
{
   $arr = array(
      'nombre'        => $_POST['nombre'],
      'usuario'       => $_POST['usuario'],
      'correo'        => $_POST['correo'],
      'pass'          => $_POST['pass'],
      'confirma_pass' => $_POST['confirma_pass'],
      'pregunta'      => $_POST['pregunta'],
      'respuesta'     => $_POST['respuesta'],
   );

   echo json_encode($arr);

}

// FunctionName();

include "inserta_usuario.php";
