function informacion_index(argument) {
	let btn_modal_open = document.querySelector(".btn_modal_open");
	let btn_modal_close = document.querySelector(".btn_modal_close");
	let mas_informacion = document.querySelector(".mas_informacion");
	let mobile_menu_icon = document.querySelector(".mobile-menu-icon");
	btn_modal_open.addEventListener("click", function(argument) {
		mas_informacion.style.display = "block";
	});
	btn_modal_close.addEventListener("click", function(argument) {
		mas_informacion.style.display = "none";
	});

	// ///////////////////////////////////////////////////////////////////
	// let tm_nav = document.querySelector(".tm-nav");

	// mobile_menu_icon.addEventListener("click", function(argument) {
	// 	tm_nav.style.display = "block";
	// });
	// ///////////////////////////////////////////////////////////////////
}

informacion_index();