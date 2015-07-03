 <?php

        require_once 'Funciones.php';
        $objeto_funciones = new Funciones();
        $lista_tipos = $objeto_funciones->listaTipoTiendas();
        echo json_encode($lista_tipos);


    // if(isset($_POST['tipo'])){
    //     $tipo = $_POST['tipo'];

    //    require_once 'Funciones.php';
    //     $objeto_funciones = new Funciones();
    //     $lista_tipos = $objeto_funciones->listaTipoTiendas();

    //     $respuesta = array("codigo"=>0, "mensaje"=>"Lista de tipos de tiendas", "tiendas"=>$lista_tipos);
    //  }
    //  else{
    //     $respuesta = array("codigo"=>2,"mensaje"=>"Faltan el tipo de tiendas");
        
    //  }

     
 ?>

 
