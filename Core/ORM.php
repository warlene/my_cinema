<?php
  namespace Core;

  use \PDO;

  class ORM extends \Core\Database
  {
    private $pdo;

    public function __construct()
    {
      $this->pdo = parent::__construct();
    }

    public function create($table, $fields)
    {
      $var = "";
      $params = [];

      foreach ($fields as $key => $value) {
        $var .= "$key = :$key, ";
        $params[':'.$key] = $value;
      }
      $var = substr($var, 0, -2);

      $insert = "INSERT INTO $table SET " . $var;
      $req = $this->pdo->prepare($insert);
      if ($req->execute($params)) {
        return $this->pdo->lastInsertId();
      }
      return $req->errorInfo();
    }

    public function read($table, $id)
    {
      $select = "SELECT * FROM $table WHERE id = :id";
      $req = $this->pdo->prepare($select);
      $req->execute([':id' => $id]);
      $result = $req->fetch(PDO::FETCH_ASSOC);
      return $result;
    }

    public function update($table, $id, $fields)
    {
      $set = "";
      $exe = [":id" => $id];

      foreach ($fields as $key => $value) {
        $set .= "$key = :$key, ";
        $exe[':'.$key] = $value;
      }

      $set = substr($set, 0, -2);
      $insert = "UPDATE $table SET $set WHERE id = :id";
      $req = $this->pdo->prepare($insert);
      if ($req->execute($exe)) {
        return true;
      }
      return $req->errorInfo();
    }

    public function delete($table, $id)
    {
      $delete = "DELETE FROM $table WHERE id = $id";
      $req = $this->pdo->query($delete);

      if ($req) {
        return true;
      }
      return false;
    }

    public function find($table, $params = array('WHERE' => '1', 'ORDER BY' => 'id ASC', 'LIMIT' => ''))
    {
      $select = "SELECT * FROM $table ";
      foreach ($params as $key => $value) {
        if ($key != 'LIMIT' || $key == 'LIMIT' && !empty($value)) {
          $select .= "$key $value ";
        }
      }
      $req = $this->pdo->query($select);
      if ($req) {
        $result = $req->fetchAll();
        return $result;
      }
      return false;
    }
  }
