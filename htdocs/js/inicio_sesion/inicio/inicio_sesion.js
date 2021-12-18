function inicio_sesion(argument) {
	let modal_sesion = document.querySelector(".modal_sesion");
	let modal_registro = document.querySelector(".modal_registro");
	let btn_inicio_sesion = document.querySelector(".btn_inicio_sesion");
	let btn_cerar_modal_sesion = document.querySelector(".modal_sesion .btn_cerar_modal_sesion");
	let mobile_menu_icon = document.querySelector(".mobile_menu_icon");

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
					let form_inicio_sesion =
						document.querySelector(".modal_inicio_sesion .form_inicio_sesion");
					// form_inicio_sesion.submit();
				} else if (estado.respuesta == "incorrecta") {

					console.log("Contraseña incorrecta");
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