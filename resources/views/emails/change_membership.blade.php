<!DOCTYPE html>
<html>
<head>
	<title>Nuevo Mensaje</title>
</head>
<body>
	<h2>Se ha solicitado un cambio de membresia. </h2>

	<p>Usuario:  {{$usuario->name}}</p>
	<p>Correo:  {{$usuario->email}}</p>
	<p>Membresía actual: {{$actual}}</p>
	<p>Membresia solicitada: {{$solicitada}}</p>
</body>
</html>