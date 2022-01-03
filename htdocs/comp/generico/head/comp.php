<meta charset="utf-8"/>
<meta content="IE=edge" http-equiv="X-UA-Compatible"/>
<meta content="width=device-width, initial-scale=1" name="viewport"/>
<title>
  APP Cafe
</title>
<!--
Cafe House Template
http://www.templatemo.com/tm-466-cafe-house
-->
<link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,400italic,600,700" rel="stylesheet" type="text/css"/>
<link href="http://fonts.googleapis.com/css?family=Damion" rel="stylesheet" type="text/css"/>
<link href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" rel="stylesheet"/>
<link href="https://use.fontawesome.com/releases/v5.2.0/css/fontawesome.css" rel="stylesheet"/>
<link href="css/bootstrap.min.css" rel="stylesheet"/>
<link href="css/font-awesome.min.css" rel="stylesheet"/>
<link href="css/templatemo-style.css" rel="stylesheet"/>
<link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon"/>
<link href="css/w3.css" rel="stylesheet"/>
<!-- <link href="./css/inicio_sesion/inicio_sesion.css" rel="stylesheet"/> -->
<?php if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {?>
<?php } else {?>
<!-- <link href="./css/inicio_sesion/registro/css.css" rel="stylesheet"/> -->
<?php }?>
<link href="./css/inicio_sesion/registro/css.css" rel="stylesheet"/>
<!-- <link href="./css/css.css" rel="stylesheet" type="text/css"/> -->
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->


<script src="./js/chat.js" type="text/javascript">
</script>

<script type="text/javascript" src="./js/agente_de_usuario/agente_de_usuario.js"></script>
<style>
  .w3-animate-top {
  position: relative;
  animation: animatetop 0.9s !important;
}
.modal_inicio_sesion footer,.modal_registro footer,.cuerpo_modal{
  padding: 30px !important;
  /*padding-right: 30px !important;*/
}
.w3-dropdown-click a:hover, .w3-dropdown-click:hover{
  background-color: transparent !important;
}
.w3-dropdown-click a{
  background-color: transparent !important;
  color: #c79c60 !important;
}

.w3-dropdown-content {
  cursor: auto;
  color: white !important;
  background-color: black !important;
  display: none;
  position: absolute;
  min-width: 160px;
  margin: 0;
  padding: 0;
  z-index: 1;
}

.w3-dropdown-content a:hover,{
  background-color: transparent !important;
  color: #c79c60 !important;
}

.w3-dropdown-content .w3-button:hover {
  color: #c79c60 !important;
  background-color: transparent !important;
}
.w3-dropdown-content .w3-button {
  color: white !important;
  background-color: transparent !important;
}
.tm-black-bg {
  background-color: #302f2f;
  color: white;
  padding-top: 5px !important;
}
</style>
