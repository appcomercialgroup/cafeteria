function inicio_sesion(argument) {
	let modal_sesion = document.querySelector(".modal_sesion");
	let modal_registro = document.querySelector(".modal_registro");
	let btn_inicio_sesion = document.querySelector(".btn_inicio_sesion");
	let btn_cerar_modal_sesion = document.querySelector(".modal_sesion .btn_cerar_modal_sesion");
	let mobile_menu_icon = document.querySelector(".mobile_menu_icon");
	let modal_inicio_error_sesion = document.querySelector(".modal_inicio_error_sesion");
	let btn_cerar_modal_error_sesion = document.querySelector(".btn_cerar_modal_error_sesion");

	btn_cerar_modal_error_sesion.addEventListener("click", function(argument) {
		modal_inicio_error_sesion.style.display = "none";
	});

	// btn_inicio_sesion
	// sesion.style.display = "block";

	let txt_usuario =
		document.querySelector(".modal_sesion .usuario");

	let txt_pass =
		document.querySelector(".modal_sesion .pass");

	let btn_enviar =
		document.querySelector(".modal_sesion .btn_enviar");

	console.log(txt_usuario);
	console.log(txt_pass);

	btn_enviar.addEventListener("click", function(argument) {
		//  Validar campos antes de enviar al servidor
		// if (txt_usuario) {}

		const formData = new FormData();
		let navegador = nombre_de_navegador();
		formData.append(
			"nombre", txt_usuario.value
		);
		formData.append(
			"pass", txt_pass.value
		);
		formData.append(
			"navegador", navegador
		);
		inicio_de_sesion(formData);
	});

	btn_inicio_sesion.addEventListener("click", function(argument) {
		modal_sesion.style.display = "block";

		if (window.screen.availWidth <= 1013) {
			mobile_menu_icon.click();
		}

	});

	btn_cerar_modal_sesion.addEventListener("click", function(argument) {
		modal_sesion.style.display = "none";
	});

	let btn_registro = document.querySelector(".modal_sesion .btn_registro");

	btn_registro.addEventListener("click", function(argument) {
		modal_sesion.style.display = "none";
		modal_registro.style.display = "block";
	});

	function inicio_de_sesion(datos) {
		let mensaje = document.querySelector(
			".modal_inicio_error_sesion .cuerpo_modal p");

		var xhr = new XMLHttpRequest();
		xhr.open("POST", './php/inicio_sesion/comp.php', true);

		//Send the proper header information along with the request
		// xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

		xhr.onreadystatechange = function() { // Call a function when the state changes.
			if (this.readyState === XMLHttpRequest.DONE && this.status === 200) {
				console.log(xhr.responseText);
				console.log(xhr.response);

				let estado = JSON.parse(xhr.response);
				console.log(estado);

				if (estado.respuesta == "logeado") {
					console.log("logeado");
					console.log(estado.datos_usuario);
					console.log(estado.token_inicio);
					let form_inicio_sesion =
						document.querySelector(".modal_inicio_sesion .form_inicio_sesion");

					let sesion =
						document.querySelector(".modal_inicio_sesion .sesion");

					let token_inicio =
						document.querySelector(".modal_inicio_sesion .token_inicio");

					token_inicio.value = estado.token_inicio;

					console.log(form_inicio_sesion);

					location.reload();

					// form_inicio_sesion.submit();

				} else if (estado.respuesta == "incorrecta") {
					mensaje.textContent = "La contraseña es incorecta";
					modal_sesion.style.display = "none";
					modal_inicio_error_sesion.style.display = "block";
					console.log("Contraseña incorrecta");
				} else if (estado.respuesta == "error") {
					mensaje.textContent = "El usuario no existe. Utilisa ese nombre de usuario para crtear tu cuenta";
					modal_sesion.style.display = "none";
					modal_inicio_error_sesion.style.display = "block";
					console.log("Contraseña error");
				}
			}
		}
		xhr.send(datos);
		// xhr.send(new Int8Array());
		// xhr.send(document);
	}

	console.log('Script Iicio sesion');
}

inicio_sesion();

// {
// 	"respuesta": "logeado",
// 	"datos_usuario": {
// 		"id_usuario": "1",
// 		"nombre_usuario": "Carlos",
// 		"pass_usuario": "$2y$10$4V5IgQbNa8hVG1zBdY9jRevLPvLEYdkKYlxBvD7MKCeFwI0oTVHKC",
// 		"correo": "caleman97914@mail.com",
// 		"pregunta": "Pregunta",
// 		"respuesta": "REspuesta",
// 		"usuario": "caleman9791"
// 	},
// 	"token_inicio": "8e1791212252e4deeb2b49ff032fffe7cde46587"
// }