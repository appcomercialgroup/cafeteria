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
  let alerta_mensaje = document.querySelector(".alerta_mensaje");
  let btn_aceptar_alerta_mensaje =
    document.querySelector(".modal_registro .btn_aceptar_alerta_mensaje");

  btn_aceptar_alerta_mensaje.style.display = "none";
  alerta_mensaje.style.display = "none";
  // let cerar_alerta_mensaje = document.querySelector(".alerta_mensaje span");

  // cerar_alerta_mensaje.addEventListener("click", function(argument) {
  //   alerta_mensaje.style.display = "none";
  // });

  btn_enviar.addEventListener("click", function function_name(argument) {
    alerta_mensaje.style.display = "none";
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
      console.log(txt_nombre.value);
    }
    if (datos_form.usuario) {
      console.log('exito usuario');
      console.log(txt_usuario.value);
    }
    if (datos_form.correo) {
      console.log('exito correo');
      console.log(txt_correo.value);
    }
    if (datos_form.pass) {
      console.log('exito pass');
      console.log(txt_pass.value);
    }
    if (datos_form.confirma_pass) {
      console.log('exito confirma_pass');
      console.log(txt_confirma_pass.value);
    }
    if (datos_form.pregunta) {
      console.log('exito pregunta');
      console.log(txt_pregunta.value);
    }
    if (datos_form.respuesta) {
      console.log('exito respuesta');
      console.log(txt_respuesta.value);
    }
    console.log(datos_form);
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
        txt_confirma_pass,
        txt_pregunta,
        txt_respuesta
      );

    } else {
      console.log('No se envia ');
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

    // fetch('./php/registro/registro.php', {
    //     method: 'POST',
    //     body: formData,
    //   })
    //   .then(response => response.json())
    //   .then(result => {
    //     console.log('Success:', result);
    //   })
    //   .catch(error => {
    //     console.error('Error:', error);
    //   });

    var xhr = new XMLHttpRequest();
    xhr.open("POST", './php/registro/registro.php', true);

    //Send the proper header information along with the request
    // xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

    xhr.onreadystatechange = function() { // Call a function when the state changes.
      if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
        console.log(xhr.response);
        if (JSON.parse(xhr.response)) {

          console.log(JSON.parse(xhr.response));

          let datos = JSON.parse(xhr.response);

          if (datos.respuesta == "existe") {

            console.log('Usuario existe');

            let alerta_mensaje = document.querySelector(".alerta_mensaje");
            let alerta_mensaje_h3 = document.querySelector(".alerta_mensaje h3");
            let alerta_mensaje_p = document.querySelector(".alerta_mensaje p");
            alerta_mensaje.classList.remove("w3-pale-green");
            alerta_mensaje.classList.add("w3-pale-red");
            alerta_mensaje_h3.textContent = "Alerta!";
            alerta_mensaje_p.textContent =
              "Este usuario o el correo ya existe, prueba otro o recupera tu contraseña!";

            alerta_mensaje.style.display = "block";

          } else if (datos.respuesta == "exito") {

            console.log('Insertado con éxito');

            let alerta_mensaje = document.querySelector(".alerta_mensaje");
            let alerta_mensaje_h3 = document.querySelector(".alerta_mensaje h3");
            let alerta_mensaje_p = document.querySelector(".alerta_mensaje p");

            alerta_mensaje.classList.add("w3-pale-green");
            alerta_mensaje.classList.remove("w3-pale-red");
            alerta_mensaje_h3.textContent = "Prefecto!";
            alerta_mensaje_p.textContent = "Bienvenido a la aplicación de mi cafetería!";
            alerta_mensaje.style.display = "block";
            let all_btn_modal_registro =
              document.querySelectorAll(".modal_registro input, .modal_registro a");

            let formulario_registro = document.querySelector(".formulario_registro");
            formulario_registro.classList.add("form_trasicion");
            for (var i = 0; i < all_btn_modal_registro.length; i++) {

              all_btn_modal_registro[i].disabled = true;
            }

            let btn_aceptar_alerta_mensaje =
              document.querySelector(".modal_registro .btn_aceptar_alerta_mensaje");
            btn_aceptar_alerta_mensaje.disabled = false;
            btn_aceptar_alerta_mensaje.style.display = "block";

          } else if (datos.respuesta == "error_datos") {

            console.log('Los datos ingresados no son correctos');
          }

        } else {

          console.log('Error de respuesta');
        }
      }
    }
    xhr.send(formData);

  }

  console.log('registro');
 }

 fun_modal_registro();