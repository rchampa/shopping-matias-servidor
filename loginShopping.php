 <?php

    //header('Content-Type: application/json; charset=utf-8');
    //0: login correcto
    //1: login incorrecto
    //2: faltan datos
    if(isset($_POST['email']) && isset($_POST['clave'])){
        $emailUsuario = $_POST['email'];
        $claveUsuario = $_POST['clave'];

       require_once 'Funciones.php';
        $objeto_persona = new Funciones();
        $respuesta = $objeto_persona->login($emailUsuario, $claveUsuario);

     }
     else{
        $respuesta = array("codigo"=>2,"mensaje"=>"Faltan datos");
     }

     echo json_encode(array($respuesta));
    
 ?>

 
