 <?php

    require_once 'Funciones.php';
    $objeto_funciones= new Funciones();
    $respuesta = $objeto_funciones->listaTiendas();

     echo json_encode($respuesta);
    
 ?>