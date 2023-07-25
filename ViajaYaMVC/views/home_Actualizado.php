<?php 
$template = '
<article class="item">
	<h3 class="p1">Bienvenidos a ViajaYa, aqui podras hacer tus reservas de tus pasajes</h3>
	<p class="p1  f1_25">Usuario <b>%s</b></p>
	<p class="p1  f1_25">Mail <b>%s</b></p>

</article>
';

printf(
	$template,
	$_SESSION['user'],
	$_SESSION['mail']
);