<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Mensaje</title>
</head>
<body>
	<h2>Se ha enviado un mensaje de contacto: </h2>

	<p>Nombre:  {{$message->name}}</p>
	<p>Correo:  {{$message->email}}</p>
	<p>Mensaje: {{$message->message}}</p>
</body>
</html>