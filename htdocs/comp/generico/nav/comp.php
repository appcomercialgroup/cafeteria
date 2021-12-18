<div class="tm-top-header">
  <div class="container">
    <div class="row">
      <div class="tm-top-header-inner">
        <div class="tm-logo-container">
          <img alt="Logo" class="tm-site-logo" src="img/logo.png"/>
          <h1 class="tm-site-name tm-handwriting-font">
            Cafe House
          </h1>
        </div>
        <div class="mobile-menu-icon mobile_menu_icon">
          <i class="fa fa-bars">
          </i>
        </div>
        <nav class="tm-nav">
          <ul>
            <li>
              <?php if (!isset($_GET['url']) || (isset($_GET['url']) && $_GET['url'] == "index")): ?>
              <a class="active" href="./index.php?url=index">
                Inicio
              </a>
              <?php else: ?>
              <a class="" href="./index.php?url=index">
                Inicio
              </a>
              <?php endif;?>
            </li>
            <li>
              <?php if (isset($_GET['url']) && $_GET['url'] == "especial"): ?>
              <a class="active" href="./especial.php?url=especial">
                Especial del día
              </a>
              <?php else: ?>
              <a href="./especial.php?url=especial">
                Especial del día
              </a>
              <?php endif;?>
            </li>
            <li>
              <?php if (isset($_GET['url']) && $_GET['url'] == "menu"): ?>
              <a class="active" href="./menu.php?url=menu">
                Menú
              </a>
              <?php else: ?>
              <a href="./menu.php?url=menu">
                Menú
              </a>
              <?php endif;?>
            </li>
            <li>
              <?php if (isset($_GET['url']) && $_GET['url'] == "contacto"): ?>
              <a class="active" href="./contacto.php?url=contacto">
                Contacto
              </a>
              <?php else: ?>
              <a href="./contacto.php?url=contacto">
                Contacto
              </a>
              <?php endif;?>
            </li>
            <li>
              <?php if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si") {?>
              <!--     <a class="btn_inicio_sesion" href="#">
                Sesión Iniciada
              </a> -->
              <div class="w3-dropdown-click">
                <a class="btn_inicio_sesion" onclick="myFunction()" style="">
                  Perfil
                </a>
                <div class="w3-dropdown-content w3-bar-block w3-border" id="Demo">
                  <a class="w3-bar-item w3-button" href="#">
                    Compras
                  </a>
                  <a class="w3-bar-item w3-button" href="#">
                    Configuración
                  </a>
                  <a class="w3-bar-item w3-button" href="#">
                    Salir
                  </a>
                </div>
              </div>
              <?php } else {?>
              <a class="btn_inicio_sesion" href="#">
                inicia sesión
              </a>
              <?php }?>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </div>
  <div class="w3-container w3-pale-green w3-bottombar w3-border-green w3-border mensaje_navegador_compatible">
    <p>
      Para una mejor experiencia descarga Firefox
      <a href="https://www.mozilla.org/es-ES/firefox/new/" target="_blank">
        aquí
      </a>
    </p>
  </div>
</div>
