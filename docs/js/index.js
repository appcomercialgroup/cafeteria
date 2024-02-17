// let tm_welcome_header_2 = document.querySelector(".tm-welcome-header-2");
// // ("tm-welcome-header-2")

// Verifica si el ancho de la pantalla es menor o igual a 481px
if (window.matchMedia("(max-width: 481px)").matches) {
	// Selecciona el elemento por su clase y cambia su tamaño de fuente
	var welcomeHeader = document.querySelector('.tm-welcome-header-2');
	if (welcomeHeader) {
		welcomeHeader.style.fontSize = '45px';
	}
}
