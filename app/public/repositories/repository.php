<?php
class Repository {

    protected $connection;

    function __construct() {

        $servername = "mysql";
        $username = "root";
        $password = "secret123";

        try {
            $this->connection = new PDO("mysql:host=$servername;dbname=developmentdb", $username, $password);
                
            // set the PDO error mode to exception
            $this->connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo "Connected successfully";
          } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
          }
    }       

}