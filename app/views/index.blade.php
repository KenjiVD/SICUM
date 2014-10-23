<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="{{(url('/'))}}/styleIndex.css">
</head>
<body>
	<header><p>Sistema de Altas</p> <img src="img/logo.jpg"></header>
	<div id="contenido">
		<div id="menu">
			<li><p>Inicio</p></li>
			<li><p onclick="mostrar()">Ingresar Alumno</p></li>
			<li><p>Ingresar Calificación</p></li>
			<li><p>Ingresar Colegiatura</p></li>
		</div>
	<div id="altas"><div id="alumno">
		<form action="{{(url('NuevoAlumno'))}}" method="post">
			<label>Dar de alta a alumno</label><br><br>
			<input placeholder="Nombre" type="text" name="nombre" required/><br>
			<input placeholder="Curp" type="text" name="curp" required/><br>
			<select name="periodo" required>
				<option>Periodo</option>
				<?php foreach ($periodo as $key) { ?>
					<option value="{{$key->idperiodo}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="carrera" required>
				<option>Carrera</option>
				<?php foreach ($carrera as $key) { ?>
					<option value="{{$key->idcarrera}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="grupo" required>
				<option>Grupo</option>
				<?php foreach ($grupo as $key) { ?>
					<option value="{{$key->idgrupo}}">{{$key->periodo_idperiodo}} - {{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="nivel" required>
				<option>Nivel</option>
				<?php foreach ($nivel as $key) { ?>
					<option value="{{$key->idnivel}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<div class="enviar"><input type="submit" value="Enviar"/></div>
		</form>
	</div>
	<div id="calificaciones">
		<form action="{{(url('NuevaCalificacion'))}}" method="post">
			<label>Dar de alta a Calificaciones</label><br><br>
			<input placeholder="Matricula" type="text" name="matricula" required/><br>
			<input placeholder="Calificacion" type="text" name="calificacion" required/><br>
			<select name="materia" required>
				<option>Materia</option>
				<?php foreach ($materia as $key) { ?>
					<option value="{{$key->idmateria}}">{{$key->nombrec}} : {{$key->nombrem}}</option>
				<?php }?>
			</select><br>
			<select name="periodo" required>
				<option>Periodo</option>
				<?php foreach ($periodo as $key) { ?>
					<option value="{{$key->idperiodo}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="carrera" required>
				<option>Carrera</option>
				<?php foreach ($carrera as $key) { ?>
					<option value="{{$key->idcarrera}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="grupo" required>
				<option>Grupo</option>
				<?php foreach ($grupo as $key) { ?>
					<option value="{{$key->idgrupo}}">{{$key->periodo_idperiodo}} - {{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="nivel" required>
				<option>Nivel</option>
				<?php foreach ($nivel as $key) { ?>
					<option value="{{$key->idnivel}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<div class="enviar"><input type="submit" value="Enviar"/></div>
		</form>
	</div>
	<div id="colegiaturas">
		<form action="{{(url('NuevaColegiatura'))}}" method="post">
			<label>Dar de alta a Colegituaras</label><br><br>
			<input placeholder="Matricula" type="text" name="matricula" required/><br>
			<select name="periodo" required>
				<option>Periodo</option>
				<?php foreach ($periodo as $key) { ?>
					<option value="{{$key->idperiodo}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="mes" required>
				<option>Mes</option>
				<option value="1">Enero</option>
				<option value="2">Febrero</option>
				<option value="3">Marzo</option>
				<option value="4">Abril</option>
				<option value="5">Mayo</option>
				<option value="6">Junio</option>
				<option value="7">Julio</option>
				<option value="8">Agosto</option>
				<option value="9">Septiembre</option>
				<option value="10">Octubre</option>
				<option value="11">Noviembre</option>
				<option value="12">Diciembre</option>
			</select><br>
			<div class="enviar"><input type="submit" value="Enviar"/></div>
		</form>
	</div>
	<div id="materia">
		<form action="{{(url('NuevaMateria'))}}" method="post">
			<label>Dar de alta a Materia</label><br><br>
			<input placeholder="Nombre de la materia" type="text" name="nombre" required/><br>
			<select name="periodo" required>
				<option>Periodo</option>
				<?php foreach ($periodo as $key) { ?>
					<option value="{{$key->idperiodo}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<select name="carrera" required>
				<option>Carrera</option>
				<?php foreach ($carrera as $key) { ?>
					<option value="{{$key->idcarrera}}">{{$key->nombre}}</option>
				<?php }?>
			</select><br>
			<div class="enviar"><input type="submit" value="Enviar"/></div>
		</form>
	</div>
	</div>
	</div>
	<footer>
		<p>Cento Universitario Mesoamericano Joaquin Miguel Gutierrez</p>
		<script type="text/javascript" src="{{(url('/'))}}/scriptIndex.js" ></script>
	</footer>
</body>
</html>