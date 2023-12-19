<?php
class Connexion {
    public $host = "localhost";
    public $username = "root";
    public $password = "";
    public $db_name = "test";
    public $pdo;

    public function __construct() {
        // $this->pdo = $pdo;
        $this->connexion_data();
    }

    public function connexion_data() {
  
            $dsn = "mysql:host={$this->host};dbname={$this->db_name}";
            $this->pdo = new PDO($dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 
    
    }
}
?>
