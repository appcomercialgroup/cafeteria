<?php

// Validar si existe el usuario  y retornar respuesta , luego si es afirmativa contrastar la  contraseña del usuario usando password_verify();
include "../../conn/conn.php";
date_default_timezone_set('America/Puerto_Rico');
$nombre_usuario = $_POST['nombre'];
$pass           = $_POST['pass'];

$respuesta = array(
   'nombre_usuario' => $nombre_usuario,
   'pass'           => $pass,

);
// echo json_encode($respuesta);

function usuario_existe($usuario)
{

   // $pass = password_verify($pass_usuario, $hash);

   if (conecxion()) {
      $conn = conecxion();
      // prepare sql and bind parameters
      $stmt = $conn->prepare("SELECT * FROM usuario WHERE usuario=:usuario"
      );
      $stmt->bindParam(':usuario', $usuario);
      // $stmt->bindParam(':pass_usuario ', $pass_usuario);

      $stmt->execute();

      $count = $stmt->rowCount();

      if ($count == 1) {
         $resultado = $stmt->fetch(PDO::FETCH_ASSOC);
         $conn      = null;
         return $resultado;
         // echo json_encode($resultado);
      } else {
         $conn = null;
         return false;
      }

      // echo "New records created successfully";
   } else {
      $conn = null;
      return "error";

   }

}

function registro_de_inicio($id)
{
   $id_usuario          = intval($id);
   $token_inicio        = bin2hex(random_bytes(20));
   $fecha_inicio_sesion = date("Y/m/d");
   $hora_inicio_sesion  = date("h:i:s");
   $navegador           = $_POST['navegador'];

   if (conecxion()) {
      $conn = conecxion();
      // /////////////////////////////////////////////////////////
      $ultimo_inicio = "SELECT * FROM inicio_sesion WHERE id_usuario= $id_usuario";

      // /////////////////////////////////////////////////////////

      // /////////////////////////////////////////////////////////////////////////////
      $registro_inicio = $conn->prepare("INSERT INTO
      inicio_sesion (id_usuario, token_inicio, fecha_inicio_sesion, hora_inicio_sesion,navegador)
      VALUES (:id_usuario, :token_inicio, :fecha_inicio_sesion, :hora_inicio_sesion,:navegador)");

      $registro_inicio->bindParam(
         ':id_usuario', $id_usuario, PDO::PARAM_INT);
      $registro_inicio->bindParam(
         ':token_inicio', $token_inicio, PDO::PARAM_STR);
      $registro_inicio->bindParam(
         ':fecha_inicio_sesion', $fecha_inicio_sesion, PDO::PARAM_STR);
      $registro_inicio->bindParam(
         ':hora_inicio_sesion', $hora_inicio_sesion, PDO::PARAM_STR);
      $registro_inicio->bindParam(
         ':navegador', $navegador, PDO::PARAM_STR);

      $update_secion_token = "UPDATE inicio_sesion SET token_inicio= '$token_inicio', fecha_inicio_sesion= '$fecha_inicio_sesion', hora_inicio_sesion= '$hora_inicio_sesion', navegador= '$navegador' WHERE id_usuario=$id_usuario";

      // Prepare statement

      // /////////////////////////////////////////////////////////////////////////////

      // use exec() because no results are returned
      // $ultimo_inicio->execute();
      $verifica_ultimo_inicio = $conn->prepare($ultimo_inicio);
      $verifica_ultimo_inicio->execute();
      $count = $verifica_ultimo_inicio->rowCount();
      $verifica_ultimo_inicio->closeCursor();

      if ($count == 1) {

         $actulaiza_inicio = $conn->prepare($update_secion_token);

         $actulaiza_inicio->execute();

      } else {

         $registro_inicio->execute();
      }

      $conn = null;
      return true;

   } else {
      $conn = null;
      echo conecxion();
   }

}

$datos_usuario = usuario_existe($nombre_usuario);

if ($datos_usuario == false || $datos_usuario == "error") {

   $respuesta = array(
      'respuesta' => "error",

   );
   echo json_encode($respuesta);

} else {

   if (password_verify($pass, $datos_usuario["pass_usuario"])) {

      if (registro_de_inicio($datos_usuario["id_usuario"])) {
         $respuesta = array(
            'respuesta'     => "logeado",
            'datos_usuario' => $datos_usuario,

         );

         echo json_encode($respuesta);
      } else {

         $respuesta = array(
            'respuesta'     => "logeado_sin_registro",
            'datos_usuario' => $datos_usuario,

         );

         echo json_encode($respuesta);
      }

   } else {
      $respuesta = array(
         'respuesta' => "incorrecta",

      );
      echo json_encode($respuesta);
   }
}
