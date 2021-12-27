var mas_informacion = document.querySelector(".mas_informacion");
var btn_cerar_modal = document.querySelector(".btn_cerar_modal");
var tiempo = 10000;
btn_cerar_modal.addEventListener("click", function(argument) {
	mas_informacion.style.display = "none";

});

setInterval(function() {
	console.log('ok');
	console.log(tiempo);
	mas_informacion.style.display = "block";
}, tiempo);

// console.log('ok');