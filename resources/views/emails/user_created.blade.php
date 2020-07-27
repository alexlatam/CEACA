<!DOCTYPE html>
<html>
<head>
	<title>Usuario registrado</title>
</head>
<body>
	<h2>Se ha registrado un usuario con los siguientes datos: </h2>

	<p>Nombre:  {{$usuario['name']}}</p>
	<p>Correo:  {{$usuario['email']}}</p>
	<p>País: {{$usuario['pais']}}</p>
	<p>Empresa: {{$usuario['empresa']}}</p>
	<p>Planta: {{$usuario['planta']}}</p>
	<p>Cargo: {{$usuario['cargo']}}</p>
	<p>Tipo de caldera: {{$usuario['tipo_caldera']}}</p>
	<p>Actividad: {{$usuario['actividad']}}</p>
	<p>Especialidad: {{$usuario['especialidad']}}</p>
	<p>Sector: {{$usuario['sector']}}</p>
</body>
</html>