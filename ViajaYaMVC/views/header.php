<?php 
print('
<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8">
	<title>ViajaYa</title>
	<meta name="description" content="Bienvenidos a ViajaYa, donde podras reservar y adquirir tus pasajes de trenes">
	<link rel="stylesheet" href="./public/css/style.css">
</head>
<body>
	<header class="container  center  header">
		<div class="item  i-b  v-middle  ph12  lg2  lg-left">
			<h1 class="logo">ViajaYa</h1>
		</div>
');

if($_SESSION['ok'])
{
	print('
		<nav class="item  i-b  v-middle  ph12  lg10  lg-right  menu">
			<ul class="container">
				<li class="nobullet  item  inline"><a href="./">Inicio</a></li>
				<li class="nobullet  item  inline"><a href="reservas">Reservas</a></li>
				<li class="nobullet  item  inline"><a href="usuarios">Usuarios</a></li>
				<li class="nobullet  item  inline"><a href="origen">Origen</a></li>
				<li class="nobullet  item  inline"><a href="salir">Salir</a></li>
			</ul>
		</nav>
	');
}

print('
	</header>
	<main class="container  center  main">
');