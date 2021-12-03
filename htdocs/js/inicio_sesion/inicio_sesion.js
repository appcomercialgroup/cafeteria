function inicio_sesion(argument) {
	let modal_sesion = document.querySelector(".modal_sesion");
	let modal_registro = document.querySelector(".modal_registro");
	let btn_inicio_sesion = document.querySelector(".btn_inicio_sesion");
	let btn_cerar_modal_sesion = document.querySelector(".modal_sesion .btn_cerar_modal_sesion");
	let mobile_menu_icon = document.querySelector(".mobile_menu_icon");

	// btn_inicio_sesion
	// sesion.style.display = "block";

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

	console.log('Inicio sesion');
}

inicio_sesion();