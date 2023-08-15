<?php
    require_once('back-end/DistanciaModel.php');
    
    $mostrar = new DistanciaModel();
    $distancias = $mostrar->read();
    $list_view = count($distancias);
    //var_dump($mostrar_datos);
    if(isset($_POST['btn_consulta'])){

    echo"<h2>Numero de filas: <marck>$list_view</marck></h2>";
    echo'<h2>Tabla de Distancias</h2>';
    echo '<table>
         <tr>
             <th> ID </th>
             <th> Origen Id </th>
             <th> destino Id </th>
             <th> origen </th>
             <th> destino </th>
             <th> km </th>
             <th> Ramal </th>      
         </tr>';
      //for($n = 0; $n < count($mostrar_datos);$n++){
        foreach ($distancias as $distancia) {
        echo '<tr>
                <td>' . $distancia['id_distancia'] . '</td>
                <td>' . $distancia['origen_id'] . '</td>
                <td>' . $distancia['destino_id'] . '</td>
                <td>' . $distancia['origen'] . '</td>
                <td>' . $distancia['destino'] . '</td>
                <td>' . $distancia['km'] . '</td>
                <td>' . $distancia['ramal'] . '</td>  
         </tr>';
        }
    echo'</table>';
    }
    ?>