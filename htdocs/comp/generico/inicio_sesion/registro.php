<div class="w3-modal mas_informacion w3-animate-zoom modal_registro">
  <div class="w3-modal-content w3-card-4">
    <header class="w3-container bg_marron">
      <!--  <span class="w3-button w3-display-topright btn_cerar_modal_registro">
        ×
      </span> -->
      <!--       <a class="tm-more-button margin-top-30 w3-right" >
        Read More
      </a> -->
      <input class="tm-more-button w3-display-topright btn_cerar_modal_registro" style="margin-top: 10px; margin-right: 10px;" type="button" value="Cerrar"/>
      <h1 class="tm-handwriting-font" >
        Registro
      </h1>
    </header>
    <div class="w3-container w3-padding fondo_modal cuerpo_modal">
      <div class="w3-panel w3-pale-red w3-display-container alerta_mensaje w3-animate-top">
        <span class="w3-button w3-large w3-display-topright" onclick="this.parentElement.style.display='none'">
          x
        </span>
        <h3>
          xxxxxxxx
        </h3>
        <p style="font-weight: bold;">
          xxxxxxxxxxxxxx
        </p>
        <button class="tm-more-button w3-right btn_aceptar_alerta_mensaje">
          Aceptar
        </button>
      </div>
      <div class="w3-row formulario_registro ">
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Nombre
            </b>
            <span class="msj_nombre">
            </span>
          </label>
          <input class="w3-input w3-border w3-round nombre" type="text"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Usuario
            </b>
            <span class="msj_usuario">
            </span>
          </label>
          <input class="w3-input w3-border w3-round usuario" type="text"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Correo
            </b>
            <span class="msj_correo">
            </span>
          </label>
          <input class="w3-input w3-border w3-round correo" type="email"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Contraseña
            </b>
            <span class="msj_pass">
            </span>
          </label>
          <input class="w3-input w3-border w3-round pass" type="password"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Confirma la contraseña
            </b>
            <span class="msj_confirma_pass">
            </span>
          </label>
          <input class="w3-input w3-border w3-round confirma_pass" type="password"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Pregunta de seguridad
            </b>
            <span class="msj_pregunta">
            </span>
          </label>
          <input class="w3-input w3-border w3-round pregunta" type="text"/>
        </div>
        <div class="w3-col l6 m6 s12 w3-padding">
          <label class="w3-text-brown">
            <b>
              Respuesta
            </b>
            <span class="msj_respuesta">
            </span>
          </label>
          <input class="w3-input w3-border w3-round respuesta" type="text"/>
        </div>
      </div>
      <input class="tm-more-button w3-left btn_enviar" type="button" value="Enviar"/>
    </div>
    <footer class="w3-container fondo_modal pie_modal w3-padding-16">
      <input class="tm-more-button w3-left btn_inicio" type="button" value="Inicio"/>
      <input class="tm-more-button w3-right btn_registro" type="button" value="Registro"/>
    </footer>
  </div>
</div>
