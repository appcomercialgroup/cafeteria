var mas_informacion = document.querySelector(".mas_informacion");
var btn_cerar_modal = document.querySelector(".btn_cerar_modal");
// var tiempo = 20000;
btn_cerar_modal.addEventListener("click", function(event) {
	event.preventDefault();
	mas_informacion.style.display = "none";

});

var a = document.querySelectorAll("a");
console.log(a);
for (var i = 0; i < a.length; i++) {

	a[i].addEventListener("click", function(event) {
		event.preventDefault();
		if (this == btn_cerar_modal) {
			mas_informacion.style.display = "none";
		} else {
			mas_informacion.style.display = "block";
		}

	});
}

// setInterval(function() {
// 	console.log('ok');
// 	console.log(tiempo);
// 	mas_informacion.style.display = "block";
// }, tiempo);

// console.log('ok');