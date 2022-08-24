<?php
//membuat class database
class Database {

    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $database = "learn_smkn4";
    
    protected $conn;

    function __construct(){

        if(!isset($this->conn)){
            $this->conn = new mysqli($this->host, $this->username, $this->password, $this->database);
        }
        
        if(!$this->conn){
            echo "KONEKSI BERHASIL";
        }

        return $this->conn;

    }
}

?>