<?php

function Conexion()
{

   include './conn/conn.php';
   try {
      $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
      // set the PDO error mode to exception
      $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

      echo "Conectado";

   } catch (PDOException $e) {

      echo "No Conectado";
   }

}
