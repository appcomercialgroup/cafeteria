<script src="js/jquery-1.11.2.min.js" type="text/javascript">
</script>
<!-- jQuery -->
<script src="js/templatemo-script.js" type="text/javascript">
</script>
<script src="./js/agente_de_usuario/js.js">
</script>
<?php if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {?>
<!-- Cambiar nombr4e de funcion y colocarla en fichero externo -->
<script>
  function myFunction() {
  var x = document.getElementById("Demo");
  if (x.className.indexOf("w3-show") == -1) {
    x.className += " w3-show";
  } else {
    x.className = x.className.replace(" w3-show", "");
  }
}
</script>
<?php } else {?>
<script src="./js/inicio_sesion/inicio/inicio_sesion.js" type="text/javascript">
</script>
<script src="./js/inicio_sesion/registro/registro.js" type="text/javascript">
</script>
<?php }?>
<!-- /home/code/Escritorio/Proyectos/APP/web_cafeteria_00001/htdocs/js/inicio_sesion/registro.js -->
