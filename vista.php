<?php
  //Capa vista
  require ('Controlador.php');

  echo '<h1> CRUD con MVC de la tabla Usuario </h1>';
  
  $mostrar = new MostrarQuery();
  $mostrar_datos = $mostrar->read();
  //var_dump($mostrar_datos);
  $list_view = count($mostrar_datos);
  echo"<h2>Numero de filas: <marck>$list_view</marck></h2>";
  echo'<h2>Tabla de Usuarios</h2>';
  echo '<table>
       <tr>
           <th>UsuarioID </th>
           <th> TipoUsuarioID </th>
           <th> Usuario </th>
           <th> Clave </th>
           <th> Nombre </th>
           <th> Mail </th>
       </tr>';
    for($n = 0; $n < count($mostrar_datos);$n++){
        echo '<tr>
           <td>' . $mostrar_datos[$n]['UsuarioID'] . '</td>
           <td>' . $mostrar_datos[$n]['TipoUsuarioID'] . '</td>
           <td>' . $mostrar_datos[$n]['Usuario'] . '</td>
           <td>' . $mostrar_datos[$n]['Clave'] . '</td>
           <td>' . $mostrar_datos[$n]['nombre'] . '</td>
           <td>' . $mostrar_datos[$n]['mail'] . '</td>
       </tr>';
      }
  echo'</table>';

  ?>