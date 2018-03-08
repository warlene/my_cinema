<?php
  namespace Core;

  use \Core\ORM;

  class Entity
  {
    private $table = "users";
    private $params = [];
    private $orm;

    public function __construct($params)
    {
      $this->orm = new ORM;
      $this->params = $params;
      if (isset($params['id'])) {
        $this->params = $this->orm->read($this->table, $params['id']);
      }
      foreach ($this->params as $key => $value) {
        $this->$key = $value;
      }
    }

    public function create($table)
    {
      return $this->orm->create($table, $this->params);
    }

    public function save($table)
    {
      if (isset($this->id)) {
        return $this->orm->update($table, $this->id, $this->params);
      } else {
        return $this->orm->create($table, $this->params);
      }
    }

    public function delete()
    {
      return $this->orm->delete($this->table, $this->id);
    }

    public function find($table)
    {
      return $this->orm->find($table, $this->params);
    }
  }
?>
