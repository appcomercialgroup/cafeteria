 <?php

// $nombre_usuario = $_POST['nombre'];
// $usuario        = $_POST['usuario'];
// $correo         = $_POST['correo'];
// $pass_usuario   = $_POST['pass'];
// $confirma_pass  = $_POST['confirma_pass']
// $pregunta       = $_POST['pregunta'];
// $respuesta      = $_POST['respuesta'];

if (isset($_POST['nombre']) &&
   isset($_POST['usuario']) &&
   isset($_POST['correo']) &&
   isset($_POST['pass']) &&
   isset($_POST['confirma_pass']) &&
   isset($_POST['pregunta']) &&
   isset($_POST['respuesta'])
) {
   if (no_usuario_existe()) {
      inserta_usuario();
   } else {
      $respuesta = array(
         'respuesta' => "existe",

      );
      echo json_encode($respuesta);
   }

} else {

   $respuesta = array(
      'respuesta' => "error_datos",

   );
   echo json_encode($respuesta);
}
function no_usuario_existe()
{
   // $nombre_usuario = $_POST['nombre'];
   $usuario = $_POST['usuario'];
   $correo  = $_POST['correo'];
   // $pass_usuario   = $_POST['pass'];
   // $confirma_pass  = $_POST['confirma_pass'];
   // $pregunta       = $_POST['pregunta'];
   // $respuesta      = $_POST['respuesta'];
   include "../../conn/conn.php";
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $stmt = $conn->prepare(
         "SELECT * FROM usuario WHERE usuario=:usuario OR correo=:correo"
      );
      $stmt->bindParam(':usuario', $usuario);
      $stmt->bindParam(':correo', $correo);
      $stmt->execute();
      $count = $stmt->rowCount();

      if ($count == 0) {
         return true;
      } else {
         return false;
      }
      // $result = $stmt->setFetchMode(PDO::FETCH_ASSOC);

   } catch (PDOException $e) {
      return false;
   }
   $conn = null;

}

function inserta_usuario()
{
   $nombre_usuario = $_POST['nombre'];
   $usuario        = $_POST['usuario'];
   $correo         = $_POST['correo'];
   $pass_usuario   = $_POST['pass'];
   $confirma_pass  = $_POST['confirma_pass'];
   $pregunta       = $_POST['pregunta'];
   $respuesta      = $_POST['respuesta'];

   $pass_usuario = password_hash($pass_usuario, PASSWORD_DEFAULT);

   include "../../conn/conn.php";

   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      // prepare sql and bind parameters
      $stmt = $conn->prepare(
         "INSERT INTO usuario (nombre_usuario, usuario.usuario, correo, pass_usuario, pregunta, respuesta)
  				VALUES (:nombre_usuario,:usuario,:correo, :pass_usuario, :pregunta, :respuesta)");
      $stmt->bindParam(':nombre_usuario', $nombre_usuario);
      $stmt->bindParam(':usuario', $usuario);
      $stmt->bindParam(':correo', $correo);
      $stmt->bindParam(':pass_usuario', $pass_usuario);
      $stmt->bindParam(':pregunta', $pregunta);
      $stmt->bindParam(':respuesta', $respuesta);

      $stmt->execute();

      // $respuesta = array(
      //    'respuesta' => "exito",

      // );

      // echo json_encode($respuesta);

      $arr = array(
         'respuesta'          => "exito",
         'nombre'             => $_POST['nombre'],
         'usuario'            => $_POST['usuario'],
         'correo'             => $_POST['correo'],
         'pass'               => $_POST['pass'],
         'confirma_pass'      => $_POST['confirma_pass'],
         'pregunta'           => $_POST['pregunta'],
         'respuesta_pregunta' => $_POST['respuesta'],
      );

      echo json_encode($arr);

   } catch (PDOException $e) {

      $respuesta = array(
         'respuesta' => "error",

      );

      echo json_encode($respuesta);

   }
   $conn = null;

}
