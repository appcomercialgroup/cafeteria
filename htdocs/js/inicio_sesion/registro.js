 function fun_modal_registro(argument) {
  let modal_registro = document.querySelector(".modal_registro");

  let btn_registro = document.querySelector(".modal_registro .btn_registro");

  let modal_sesion = document.querySelector(".modal_sesion");

  let btn_inicio = document.querySelector(".modal_registro .btn_inicio");

  let btn_cerar_modal_registro =
    document.querySelector(".modal_registro .btn_cerar_modal_registro");

  btn_inicio.addEventListener("click", function(argument) {
    modal_sesion.style.display = "block";
    modal_registro.style.display = "none";
  });
  btn_cerar_modal_registro.addEventListener("click", function(argument) {
    // modal_sesion.style.display = "block";
    modal_registro.style.display = "none";
  });

  let txt_nombre = document.querySelector(".modal_registro .nombre");
  let txt_usuario = document.querySelector(".modal_registro .usuario");
  let txt_correo = document.querySelector(".modal_registro .correo");
  let txt_pass = document.querySelector(".modal_registro .pass");
  let txt_confirma_pass = document.querySelector(".modal_registro .confirma_pass");
  let txt_pregunta = document.querySelector(".modal_registro .pregunta");
  let txt_respuesta = document.querySelector(".modal_registro .respuesta");
  let btn_enviar = document.querySelector(".modal_registro .btn_enviar");

  btn_enviar.addEventListener("click", function function_name(argument) {
    let datos_form = {
      nombre: fun_valida_texto(txt_nombre.value),
      usuario: fun_valida_texto(txt_usuario.value),
      correo: fun_valida_mail(txt_correo.value),
      pass: fun_valida_texto(txt_pass.value),
      confirma_pass: fun_valida_texto(txt_confirma_pass.value),
      pregunta: fun_valida_texto(txt_pregunta.value),
      respuesta: fun_valida_texto(txt_respuesta.value)
    };

    if (datos_form.nombre) {
      console.log('exito nombre');
    }
    if (datos_form.usuario) {
      console.log('exito usuario');
    }
    if (datos_form.correo) {
      console.log('exito correo');
    }
    if (datos_form.pass) {
      console.log('exito pass');
    }
    if (datos_form.confirma_pass) {
      console.log('exito confirma_pass');
    }
    if (datos_form.pregunta) {
      console.log('exito pregunta');
    }
    if (datos_form.respuesta) {
      console.log('exito respuesta');
    }

    if (
      datos_form.nombre &&
      datos_form.usuario &&
      datos_form.correo &&
      datos_form.pass &&
      datos_form.confirma_pass &&
      datos_form.pregunta &&
      datos_form.respuesta) {

      fun_registrar(
        txt_nombre,
        txt_usuario,
        txt_correo,
        txt_pass,
        txt_pregunta,
        txt_confirma_pass,
        txt_respuesta
      );

    } else {
      console.log('NO se envia ');
      console.log('=======================================');
    }

  });

  function fun_valida_texto(txt_value) {
    //obteniendo el valor que se puso en el campo text del formulario
    let texto = txt_value;
    //la condición
    let patron = /^\s+$/;
    if (texto.length == 0 || patron.test(texto)) {
      return false;
    } else {
      return true;
    }
  }

  function fun_valida_mail(txt_value) {

    //obteniendo el valor que se puso en el campo text del formulario
    let correo = txt_value;
    let patron = /[a-z0-9!#$%&'*+/=?^_`{|}~-]+(?:\.[a-z0-9!#$%&'*+/=?^_`{|}~-]+)*@(?:[a-z0-9](?:[a-z0-9-]*[a-z0-9])?\.)+[a-z0-9](?:[a-z0-9-]*[a-z0-9])?/;
    //la condición
    if (patron.test(correo)) {
      return true;
    } else {
      return false;
    }

    // /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/
  }

  function fun_registrar(
    nombre,
    usuario,
    correo,
    pass,
    confirma_pass,
    pregunta,
    respuesta
  ) {

    const formData = new FormData();

    formData.append(
      "nombre", nombre.value
    );
    formData.append(
      "usuario", usuario.value
    );
    formData.append(
      "correo", correo.value
    );
    formData.append(
      "pass", pass.value
    );
    formData.append(
      "confirma_pass", confirma_pass.value
    );
    formData.append(
      "pregunta", pregunta.value
    );
    formData.append(
      "respuesta", respuesta.value
    );

    fetch('./php/registro/registro.php', {
        method: 'POST',
        body: formData,
      })
      .then(response => response.json())
      .then(result => {
        console.log('Success:', result);
      })
      .catch(error => {
        console.error('Error:', error);
      });
  }

  console.log('registro');
 }
 fun_modal_registro();