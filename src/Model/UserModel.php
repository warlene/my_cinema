<?php
  namespace Model;

  use \PDO;
  
  class UserModel extends \Core\Database
  {
    private $email;
    private $password;
    private $pdo;

    public function __construct()
    {
      $this->pdo = parent::__construct();
      // $this->email = $email;
      // $this->password = $password;
    }

    public function create($email, $password)
    {
      $insert = "INSERT INTO users
                 SET email = :email, password = :password";
      $req = $this->pdo->prepare($insert);
      if ($req->execute(array(":email" => $email, ":password" => $password))) {
        return $this->pdo->lastInsertId();
      }
      return $req->errorInfo();
    }

    public function read($email, $password)
    {
      $select = "SELECT email, password FROM users
                 WHERE email=:email AND password=:password";
      $req = $this->pdo->prepare($select);
      $req->execute(array(':email' => $email, ':password' => $password));
      $result = $req->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    public function update($email, $password)
    {
      // $insert = "INSERT INTO users SET email = :email, password = :password";
      // $req = $this->pdo->prepare($insert);
      // if ($req->execute(":email" => $email, ":password" => $password)) {
      //   return $this->pdo->lastInsertId();
      // }
      // return $req->errorInfo();
    }

    public function delete($email, $password)
    {
      // $insert = "INSERT INTO users SET email = :email, password = :password";
      // $req = $this->pdo->prepare($insert);
      // if ($req->execute(":email" => $email, ":password" => $password)) {
      //   return $this->pdo->lastInsertId();
      // }
      // return $req->errorInfo();
    }

    public function read_all($email, $password)
    {
      // $insert = "INSERT INTO users SET email = :email, password = :password";
      // $req = $this->pdo->prepare($insert);
      // if ($req->execute(":email" => $email, ":password" => $password)) {
      //   return $this->pdo->lastInsertId();
      // }
      // return $req->errorInfo();
    }

    public function save($email, $password)
    {
      $insert = "INSERT INTO users SET email = :email, password = :password";
      $req = $this->pdo->prepare($insert);
      if ($req->execute(array(":email" => $email, ":password" => $password))) {
        return $this->pdo->lastInsertId();
      }
      return $req->errorInfo();
    }

    // public function check_login($email, $password)
    // {
      // $bdd = this->bdd_connect();
      // $select = "SELECT email, password FROM users WHERE email=:email AND password=:password";
      // $req = $bdd->prepare($select);
      // $req->execute(array(':email' => $email, ':password' => $password));
      // $result = $req->fetch(PDO::FETCH_ASSOC);
      // return $result;
    // }

  }
?>
