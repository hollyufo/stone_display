<?php


class Connection{

   private $servername = "localhost";
   private $username = "root";
   private $password = "";
   private $database = "stones";
   private $con;


    function __construct()
    {
        try {
            $this->con = new PDO("mysql:host=$this->servername;dbname=".$this->database, $this->username, $this->password);
            // set the PDO error mode to exception
            $this->con->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public static function getConnection(){
        $connection = new Connection();
        return $connection->con;
    }
}