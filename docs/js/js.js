// var mas_informacion = document.querySelector(".mas_informacion");
// var btn_cerar_modal = document.querySelector(".btn_cerar_modal");
// var btn_preguntar = document.querySelector(".btn_preguntar");

// // var tiempo = 20000;
// btn_cerar_modal.addEventListener("click", function (event) {
// 	event.preventDefault();
// 	mas_informacion.style.display = "none";

// });

// var a = document.querySelectorAll("a");
// console.log(a);
// for (var i = 0; i < a.length; i++) {

// 	a[i].addEventListener("click", function (event) {
// 		event.preventDefault();
// 		if (this == btn_cerar_modal) {
// 			mas_informacion.style.display = "none";
// 		} else {
// 			mas_informacion.style.display = "block";
// 		}
// 		if (this == btn_preguntar) {
// 			window.location = "https://tawk.to/chat/6179a366f7c0440a59204d1d/1fj1icikv";
// 		}
// 	});
// }

// setInterval(function() {
// 	console.log('ok');
// 	console.log(tiempo);
// 	mas_informacion.style.display = "block";
// }, tiempo);

// console.log('ok');

var btnOrdenar = document.querySelectorAll(".order-now-link");
console.log(btnOrdenar);
for (var i = 0; i < btnOrdenar.length; i++) {
	btnOrdenar[i].addEventListener("click", function (argument) {
		// body...
		// btnOrdenar[i].href = "#";

		console.log(this);
		argument.preventDefault();
	})
}
