<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Mensaje</title>
</head>
<body>
	<h2>Se ha enviado un mensaje de contacto: </h2>

	<p>Nombre:  {{$mensaje->name}}</p>
	<p>Correo:  {{$mensaje->email}}</p>
	<p>Mensaje: {{$mensaje->message}}</p>
</body>
</html>