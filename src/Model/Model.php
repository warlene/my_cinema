<?php
  require_once ('src/Controller/UserController.php');
  define("USER", "root");
  define("PASSWORD", "");
  define("DNS", 'mysql:host=localhost;dbname=pie_php;charset=utf8');

  class Model {

    static function bdd_connect(){
      try { $pdo = new PDO(DNS, USER, PASSWORD); }
        catch (PDOException $e) {
          die($e->getMessage());
      	}
      return $pdo;
    }
  }
?>
