<?php 
$template = '
<article class="item">
	<h3 class="p1">Bienvenidos a ViajaYa,aqui podras hacer tus reservas de tus pasajes</h3>
	<p class="p1  f1_25">Nombre <b>%s</b></p>
	<p class="p1  f1_25">Mail <b>%s</b></p>
	<p class="p1  f1_25">Origen <b>%s</b></p>
	<p class="p1  f1_25">Destino <b>%s</b></p>
</article>
';

printf(
	$template,
	$_SESSION['user'],
	$_SESSION['name'],
	$_SESSION['mail'],
	$_SESSION['role']
);