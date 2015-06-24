 <?php

    header('Content-Type: application/json; charset=utf-8');
    //0: login correcto
    //1: login incorrecto
    //2: faltan datos
    if(isset($_POST['email']) && isset($_POST['clave'])){
        $emailUsuario = $_POST['email'];
        $claveUsuario = $_POST['clave'];

        $link = mysql_connect('localhost', 'root', '');
        if (!$link) {
            die('No pudo conectar: ' . mysql_error());
        }

        mysql_select_db("agendaf_Shopping_Promotions");
        mysql_query("SET NAMES utf8");

        $sentencia = mysql_query("SELECT * FROM usuarios WHERE email_usuario='{$emailUsuario}' AND clave='{$claveUsuario}'");
        $numeroFilas = 0;
        if($sentencia)
            $numeroFilas = mysql_num_rows($sentencia);


        
        if ($numeroFilas == 0) {
            $respuesta = array("codigo"=>1,"mensaje"=>"Email o clave incorrectas.");
        }
        else{
            $respuesta = array("codigo"=>0,"mensaje"=>"Login correcto.");
        }


        mysql_close($link);
     }
     else{
        $respuesta = array("codigo"=>2,"mensaje"=>"Faltan datos");
     }

     echo json_encode($respuesta);
    
 ?>

 
