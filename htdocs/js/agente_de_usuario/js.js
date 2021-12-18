let navegador = nombre_de_navegador();

let mensaje_navegador_compatible = document.querySelector(".mensaje_navegador_compatible");

if (navegador == "Mozilla Firefox") {

	mensaje_navegador_compatible.style.display = "none";

} else {

	mensaje_navegador_compatible.style.display = "block";
}

// console.log(navegador);

// console.log('navegador');