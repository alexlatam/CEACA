let submit = document.getElementById('submit_button');
let file = document.getElementById('file_input');
let formulario = document.getElementById('form');
let logo = document.getElementById('file_logo');
let maximoBytes = 2000000;

if(submit)
{
	submit.addEventListener('click', (e) => {
		e.preventDefault();

		if(file.files.length <= 0) return;

		const archivo = file.files[0];
		

		if(logo)
		{
			const logoArchivo = logo.files[0];
			if(archivo.size > maximoBytes || logoArchivo.size > maximoBytes) {
				const alertSize = maximoBytes / 1000000;

				alert(`el tamaño máximo por imagen es ${alertSize} MB`);

				file.value = "";
				logo.value = "";
			} else {
				formulario.submit();
			}


		} else {
			if(archivo.size > maximoBytes) {
				const alertSize = maximoBytes / 1000000;

				alert(`el tamaño máximo por imagen es ${alertSize} MB`);

				file.value = "";
			} else {
				formulario.submit();
			}
		}
	});
}