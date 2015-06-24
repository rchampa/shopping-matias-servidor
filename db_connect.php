<?php
  
class DB_Connect {
  
    // constructor
    function __construct() {
  
    }
  
    // destructor
    function __destruct() {
        // $this->close();
    }
  
    // Connecting to database
    public function connect() {
        require_once 'config.php';
	
        // connecting to mysql
        $con = new PDO('mysql:host='.DB_HOST.';dbname='.DB_DATABASE, DB_USER, DB_PASSWORD);
        $con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
        // return database handler
        return $con;
    }
  
    // Closing database connection
    public function close() {
        //mysql_close();
        $con = null;
    }
  
} 
?>