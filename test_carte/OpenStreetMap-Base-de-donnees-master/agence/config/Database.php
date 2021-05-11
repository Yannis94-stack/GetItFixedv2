<?php
class Database{
    // Connexion à la base de données
    private $host = "127.0.0.1";
    private $db_name = "getitfixed";
    private $username = "root";
    private $password = "example";
    public $connexion;

    

    // getter pour la connexion
    public function getConnection(){
        // Create connection
        $conn = new mysqli($servername, $username, $password);

        // Check connection
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connected successfully";
        
        return $this->connexion;
    }   
}