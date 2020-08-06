<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Mensaje</title>
</head>
<body>
	<h2>Se ha enviado un mensaje de contacto desde el sitio web: ceaca.com </h2>

	<p>Nombre:  <strong>{{$mensaje['name']}}</strong> </p>
	<p>Correo:  <strong>{{$mensaje['email']}}</strong> </p>
	<p>Mensaje: {{$mensaje['message']}}</p>
</body>
</html>