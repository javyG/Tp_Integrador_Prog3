<?php
  //Capa vista
  class crudUsuarios{
    public function __construct(){
      require_once('controlUsuarios.php');

      echo '<h1> CRUD con MVC de la tabla Usuario </h1>';
      
      $mostrar = new ControlUsuarios();
      $mostrar_datos = $mostrar->read();
      //var_dump($mostrar_datos);
      $list_view = count($mostrar_datos);
      echo"<h2>Numero de filas: <marck>$list_view</marck></h2>";
      echo'<h2>Tabla de Usuarios</h2>';
      echo '<table>
           <tr>
               <th> Nombre </th>
               <th> Mail </th>
               <th> Usuario </th>
               <th> Clave </th>
               <th> Rol </th>
             
           </tr>';
        for($n = 0; $n < count($mostrar_datos);$n++){
            echo '<tr>
               <td>' . $mostrar_datos[$n]['name'] . '</td>
               <td>' . $mostrar_datos[$n]['mail'] . '</td>
               <td>' . $mostrar_datos[$n]['user'] . '</td>
               <td>' . $mostrar_datos[$n]['pass'] . '</td>
               <td>' . $mostrar_datos[$n]['role'] . '</td>
           </tr>';
          }
      echo'</table>';
      echo'<h2> Insertar Usuario </h2>';
    
      if(isset($_POST['btn_search'])){
          {
                               
              $buscar = $mostrar->search($_POST['name']);
              $existe=0;
    
            if(!empty($buscar))
            {
              print('Debe ingresar un nombre');
            }
            else
            { 
              for($n = 0; $n < count($mostrar_datos);$n++){
              $existe++;}
              
              $user_data = array(
                'name' => $_POST['name'],
                'mail' => $_POST['mail'],
                'user' => $_POST['user'],
                'pass' => $_POST['pass'],
                'role' => $_POST['role']
            );
              print('Busqueda exitosa');
             
        
                  
            }
              if($existe==0){
               print('No se encontro el registro');
              } 
            }
    
    
          }  
         
            //try{
             // $mostrar->create($new_Usuario);
          //  }
          //  catch(Exception ){
           //     $ver->cargar_vista('error404');
          //  }
        
          
        unset($mostrar_datos);
     
          //$del=153;
          //$mostrar->delete($del);
          //$mostrar->update($new_Usuario);
          //unset($mostrar_datos);
        
    }
  }
 
  ?>