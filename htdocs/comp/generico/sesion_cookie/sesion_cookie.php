<?php

// echo "sesion_cookie";

// include './comp/generico/sesion_cookie/comp.php';
session_start();
print_r(isset($_SESSION));

if (isset($_SESSION) == 1) {

// Set session variables
   $_SESSION["usuario"]   = "green";
   $_SESSION["favanimal"] = "cat";
   echo "Session variables are set.<br/>";

   $cookie_name  = "user";
   $cookie_value = "Alex Porter";
   setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/");

   if (!isset($_COOKIE[$cookie_name])) {
      echo "Cookie named '" . $cookie_name . "' is not set!";
   } else {
      echo "Cookie '" . $cookie_name . "' is set!<br>";
      echo "Value is: " . $_COOKIE[$cookie_name];
   }

   echo "<br/>";
   echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
   echo "Favorite animal is " . $_SESSION["favanimal"] . ".";
   session_unset();

// destroy the session
   session_destroy();

   print_r(isset($_SESSION));
}
// session_start();
// remove all session variables
