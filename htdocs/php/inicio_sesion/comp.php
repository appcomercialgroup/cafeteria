<?php

// Validar si existe el usuario  y retornar respuesta , luego si es afirmativa contrastar la  contraseña del usuario usando password_verify();

include "../../conn/conn.php";
session_start();
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

   include "../../conn/conn.php";
   // $pass = password_verify($pass_usuario, $hash);

   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
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

      return $conn;

   } catch (PDOException $e) {
      $conn = null;
      return "error";
   }

}

function registro_de_inicio($id)
{
   $id_usuario          = intval($id);
   $token_inicio        = token_no_existe();
   $fecha_inicio_sesion = date("Y/m/d");
   $hora_inicio_sesion  = date("h:i:s");
   $navegador           = $_POST['navegador'];

   include "../../conn/conn.php";

   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // /////////////////////////////////////////////////////////

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

      $registro_inicio->execute();
      $registro_inicio->closeCursor();

      $ultimo_inicio = "SELECT * FROM inicio_sesion
          WHERE id_usuario= $id_usuario ORDER BY id_inicio_sesion DESC  LIMIT 1";
      $verifica_ultimo_inicio = $conn->prepare($ultimo_inicio);
      $verifica_ultimo_inicio->execute();

      $result = $verifica_ultimo_inicio->fetch(PDO::FETCH_ASSOC);
      // $update_secion_token = "UPDATE inicio_sesion SET token_inicio= '$token_inicio', fecha_inicio_sesion= '$fecha_inicio_sesion', hora_inicio_sesion= '$hora_inicio_sesion', navegador= '$navegador' WHERE id_usuario=$id_usuario";

      // Prepare statement

      // /////////////////////////////////////////////////////////////////////////////

      // use exec() because no results are returned

      // $verifica_ultimo_inicio = $conn->prepare($ultimo_inicio);
      // $verifica_ultimo_inicio->execute();
      // $count = $verifica_ultimo_inicio->rowCount();
      // $verifica_ultimo_inicio->closeCursor();

      // if ($count == 1) {

      //    $actulaiza_inicio = $conn->prepare($update_secion_token);

      //    $actulaiza_inicio->execute();

      // } else {

      //    $registro_inicio->execute();
      // }

      $conn = null;
      return $result['token_inicio'];

   } catch (PDOException $e) {

      $conn = null;
      return false;
   }

}

function token_no_existe()
{
   include "../../conn/conn.php";
   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $token_inicio   = bin2hex(random_bytes(20));
      $verifica_token = "SELECT * FROM inicio_sesion WHERE token_inicio='$token_inicio'";
      $token_cantidad = $conn->prepare($verifica_token);
      $token_cantidad->execute();
      $token_cantidad->closeCursor();
      $count = $token_cantidad->rowCount();

      if ($count == "0") {
         return $token_inicio;
      } else {
         token_no_existe();
      }

   } catch (PDOException $e) {
      return $e;
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

      $datos = array(

         'nombre_usuario' => $datos_usuario["nombre_usuario"],
         'tipo_usuario'   => $datos_usuario["tipo_usuario"],
         'usuario'        => $datos_usuario['usuario'],

      );
      // nombre_usuario
      // pass_usuario
      // pregunta
      // respuesta
      // tipo_usuario
      // usuario

      if ($token_inicio = registro_de_inicio($datos_usuario["id_usuario"])) {
         $respuesta = array(
            'respuesta'     => "logeado",
            'datos_usuario' => $datos,
            "token_inicio"  => $token_inicio,

         );
         $_SESSION['tipo_usuario'] = $datos["tipo_usuario"];
         $_SESSION['token_inicio'] = $token_inicio;
         $_SESSION['activa']       = "si";
         // $_SESSION['nombre_usuario'] = $datos_usuario['nombre_usuario'];
         // $_SESSION['correo']         = $datos_usuario['correo'];
         // $_SESSION['usuario']        = $datos_usuario['usuario'];

         echo json_encode($respuesta);

         // Establecer varibles en el servidor de inicio de sesion
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
