<?php

function get_tipo_usuario($value = '')
{
   if ($value == "") {

   } else {
      include "./conn/conn.php";
      try {
         $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
         $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
         $stmt = $conn->prepare("SELECT * FROM tipo_usuario WHERE id_tipo_usuario= $value");
         $stmt->execute();

         // set the resulting array to associative
         $result = $stmt->fetch(PDO::FETCH_ASSOC);

         return $result["nombre_tipo_usuario"];

      } catch (PDOException $e) {
         $conn = null;
         return false;
      }
      $conn = null;

   }
}
