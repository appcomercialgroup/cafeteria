<section class="tm-welcome-section">
  <div class="container tm-position-relative">
    <div class="row tm-welcome-content">
      <div class="tm-lights-container">
        <img alt="Light" class="light light-1" src="img/light.png"/>
        <img alt="Light" class="light light-2" src="img/light.png"/>
        <img alt="Light" class="light light-3" src="img/light.png"/>
      </div>
      <h2 class="white-text tm-handwriting-font tm-welcome-header">
        <!-- <img alt="Line" class="tm-header-line" src="img/header-line.png"/> -->
        Bienvenido
        <?php if (isset($_SESSION['activa']) && $_SESSION['activa'] == "si"): ?>
        <?=$_SESSION['nombre_usuario'];?>
        <?php endif;?>
        a
        <!-- <img alt="Line" class="tm-header-line" src="img/header-line.png"/> -->
      </h2>
      <h2 class="gold-text tm-welcome-header-2">
        Mi cafetería
      </h2>
      <p class="gray-text tm-welcome-description">
        Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laborum pariatur est voluptatem dolores temporibus officiis blanditiis ullam, laboriosam eaque, quo fuga, quam dicta id porro velit non quisquam minus necessitatibus.
      </p>
      <a class="pointer tm-more-button tm-more-button-welcome btn_modal_open btn_informacion">
        Saber mas
      </a>
    </div>
    <img alt="Table Set" class="tm-table-set img-responsive" src="img/table-set.png"/>
  </div>
</section>
