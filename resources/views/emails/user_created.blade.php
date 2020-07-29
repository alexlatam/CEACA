<!DOCTYPE html>
<html>
<head>
	<title>Usuario registrado</title>
</head>
<body>
	<h2>Se ha enviado un mensaje de contacto: </h2>

	<p>Nombre:  {{$usuario['name']}}</p>
	<p>Correo:  {{$usuario['email']}}</p>
	<p>Mensaje: {{$usuario['message']}}</p>
</body>
</html>