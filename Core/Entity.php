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
        $this->params = $this->orm->read($this->table, $this->id);
      }
      foreach ($this->params as $key => $value) {
        $this->$key = $value;
      }
    }

    public function create()
    {
      return $this->orm->create($this->table, $this->id, $this->params);
    }

    public function save()
    {
      if (isset($this->id)) {
        return $this->orm->update($this->table, $this->id, $this->params);
      } else {
        return $this->orm->create($this->table, $this->params);
      }
    }

    public function delete()
    {
      return $this->orm->delete($this->table, $this->id);
    }

    public function find()
    {
      return $this->orm->find($this->table, $this->params);
    }
  }
?>
