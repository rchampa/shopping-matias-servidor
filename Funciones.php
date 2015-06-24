<?php
 
 
class Funciones {
    private $db;
    private $con;
 
    //put your code here
    // constructor
    function __construct() {
        include_once 'db_connect.php';
        // connecting to database
        $this->db = new DB_Connect();
        $this->con = $this->db->connect();
    }

    //create
    public function registro($name, $password){
        $sql = $this->con->prepare('insert into personas (nombre, password) values (?,?)');
        $sql->execute(array($name,$password));
    }

    //read
    public function login($name, $password){
        //' or 1=1 -- 
        //$sql = $this->con->prepare("SELECT nombre FROM usuarios WHERE nombre = '".$name."' and password='".$password."'");
        //SELECT nombre FROM usuarios WHERE nombre = 'admin' and password='' or 1=1 -- '
        //$sql->execute();
        $sql = $this->con->prepare("SELECT * FROM usuarios WHERE email_usuario =? and clave=?");
        $sql->execute(array($name,$password));
        $query = $sql->fetchAll();
        
        if (count($query) > 0) {
            $result=array("codigo"=>0,"mensaje"=>"Login correcto.");
            return $result;
        } else {
            $result=array("codigo"=>1,"mensaje"=>"Email o clave incorrectas.");
            return $result;
        }
        
    }
    
    
    public function listaPersonas(){

        $sql = $this->con->prepare("SELECT * FROM personas");
        $sql->execute();
        $lista_personas = $sql->fetchAll();
        
        return json_encode($lista_personas);
        
    }
    
    public function update($nombre,$password,$id){
        
        $sql = $this->con->prepare('update personas set nombre=?, password=? where id_persona=?');
        $sql->execute(array($nombre,$password,$id));
        
        return array("code"=>"100", "message"=>"Actualización correcta");
    }
    
    public function delete($id){
        
        $id_persona = intval($id);
        
        $sql = $this->con->prepare('delete from personas where id_persona=?');
        $sql->execute(array($id_persona));
        
        return array("code"=>"100", "message"=>"Borrado correcto");
    }
}