<!DOCTYPE html>
<html>
<head>
	<title>Solicitud de cambio de membresia</title>
</head>
<body>
	<h2>Se ha solicitado un cambio de membresia por uno de los miembros del Club Ceaca. </h2>

	<p>Usuario:  <strong>{{$usuario->name}}</strong> </p>
	<p>Correo:  <strong>{{$usuario->email}}</strong> </p>
	<p>Membresía actual: <strong>{{$actual}}</strong> </p>
	<p>Membresia solicitada: <strong>{{$solicitada}}</strong> </p>
</body>
</html>