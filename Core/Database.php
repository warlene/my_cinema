<?php
  namespace Core;

  use \PDO ;
  
  class Database {

    private $user = "root";
    private $password = "";
    private $dns = "mysql:host=localhost;dbname=pie_php;charset=utf8";

    public function __construct(){
      try { $pdo = new PDO($this->dns, $this->user, $this->password); }
        catch (PDOException $e) {
          die($e->getMessage());
      	}
      return $pdo;
    }
  }
?>
