let body = document.querySelector(".cuerpo-main");
let element = document.querySelector(".navbar")

window.addEventListener("DOMContentLoaded", () => {

	coordenadas = body.getBoundingClientRect();

	if (coordenadas.top < 0) {

		element.classList.add('scroll');
	}

	if (coordenadas.top == 0) {
		element.classList.remove('scroll');
	}
});

document.addEventListener("scroll", () => {
	coordenadas = body.getBoundingClientRect();

	if (coordenadas.top < 0) {

		element.classList.add('scroll');
	}

	if (coordenadas.top == 0) {
		element.classList.remove('scroll');
	}


});