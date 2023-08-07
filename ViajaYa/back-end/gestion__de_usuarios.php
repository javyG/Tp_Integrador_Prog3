<?php 
//require_once('crudUsuarios.php');
require_once('controlUsuarios.php');
print('
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Reservas</title>
  <link rel="stylesheet" src="css/styleReservas.css" type="text/css" href="css/styleReservas.css">
</head>
<body>
  <header>
          <a>
          <img class="logo" src="css/Imagen/logo.png" alt="">
          </a> 
          <nav>
              <a class="login-usuario" onclick="cerrarsesion();">Cerrar Sesión</a>        
          </nav>
  </header>
<form class="form" action="gestion_de_usuarios.php" method="POST">
  <h1>Crud de Usuarios</h1>
  <p> Hola Bienvenido "name" </p>

  <div class="datos_pasajero">
  <input type="Buscar" name="name" placeholder="Ingrese nombre de usuario">

  <input type="submit" value="Buscar" class="btn btn-success" name="btn_search">

	  <!-- <img class="input-icon" src="/carpeta/nombrearchivo.svg" alt="imagenInput"> -->
	  
</form>
');
$nombre = $_REQUEST['name'];
$mostrar = new ControlUsuarios();
//if(isset($_POST['btn_search'])){
	{
						 
		$buscar = $mostrar->read($nombre);
		$existe=0;
		if(empty($buscar) ) {
			print( '	
				<div class="container">
					<p>Debe ingresar un nombre</p>
				</div>
			');
		} else {
			$mostrar_resultado = '
			<div class="item">
				<table>
					<tr>
						<th>Id</th>
						<th>Consulta de Usuario</th>
						<th colspan="2">
							<form method="POST">
								<input type="hidden" name="Agregar" value="agregar_usuario">
								<input class="button  add" type="submit" value="Agregar">
							</form>
						</th>
					</tr>';
		
			for ($n=0; $n < count($buscar); $n++) { 
				$mostrar_resultado .= '
					<tr>
						<td>' . $buscar[$n]['user_id'] . '</td>
						<td>' . $buscar[$n]['name'] . '</td>
						<td>' . $buscar[$n]['mail'] . '</td>
						<td>' . $buscar[$n]['user'] . '</td>
						<td>' . $buscar[$n]['pass'] . '</td>
						<td>' . $buscar[$n]['role'] . '</td>
						<td>
							<form method="POST">
								<input type="hidden" name="Editar" value="editar_usuario">
								<input type="hidden" name="user_id" value="' . $buscar[$n]['user_id'] . '">
								<input class="button  edit" type="submit" value="Editar">
							</form>
						</td>
						<td>
							<form method="POST">
								<input type="hidden" name="delete" value="eliminar_usuario">
								<input type="hidden" name="user_id" value="' . $buscar[$n]['user_id'] . '">
								<input class="button  delete" type="submit" value="Eliminar">
							</form>
						</td>
					</tr>
				'; 
				$existe++;
			}
		
			$mostrar_resultado .= '
				</table>
			</div>
			';
		}
	}
	if($existe==0){
		print('
		<p>No se encontro el registro</p>');
	} 
//}
print('
<footer>
<div class="piepag">
  <h3 class="corpo"> Viaja Ya &copy; 2023 - Todos los derechos reservados   </h3>
</div>
</footer>  
')
?>