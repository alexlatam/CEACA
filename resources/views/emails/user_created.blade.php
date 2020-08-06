<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Mensaje de contacto</title>
</head>
<body>
	<h2>Se ha enviado un mensaje de contacto: </h2>

	<p>Nombre:  <strong>{{$message->name}}</strong></p>
	<p>Correo: <strong>{{$message->email}}</strong></p>
	<hr>
	<p>Mensaje: {{$message->message}}</p>
</body>
</html>