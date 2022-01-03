<?php

include "./conn/conn.php";

function get_datos_usuario($token)
{
   include "./conn/conn.php";
   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      $id_usuario       = id_del_token($token);
      $sql              = "SELECT * FROM usuario WHERE id_usuario='$id_usuario'";
      $verifica_usuario = $conn->prepare($sql);
      $verifica_usuario->execute();

      $result = $verifica_usuario->fetch(PDO::FETCH_ASSOC);

      return $result;

   } catch (PDOException $e) {
      return $e;
   }

}

function id_del_token($token)
{
   include "./conn/conn.php";
   try {

      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $sql = "SELECT * FROM inicio_sesion WHERE token_inicio='$token' ORDER BY id_inicio_sesion DESC  LIMIT 1";

      $verifica_usuario = $conn->prepare($sql);
      $verifica_usuario->execute();

      $result = $verifica_usuario->fetch(PDO::FETCH_ASSOC);

      return $result['id_usuario'];

   } catch (PDOException $e) {
      return $e;
   }

}
