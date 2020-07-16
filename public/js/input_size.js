let submit = document.getElementById('submit_button');
let file = document.getElementById('file_input');
let formulario = document.getElementById('form');
let logo = document.getElementById('file_logo');



//inputs

texts = document.querySelectorAll('.input-text');

if(submit)
{
	submit.addEventListener('click', (e) => {
		e.preventDefault();

		if(!validarServicio())
		{	
			
		}

		if(file.files.length <= 0 || logo.files.length <= 0) return alert('Debe cargar un logo y una imagen');

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

