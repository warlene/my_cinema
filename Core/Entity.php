<?php
  namespace Core;

  use \Core\ORM;

  class Entity
  {
    private $table;
    private $params = [];
    private $orm;

    public function __construct($params, $table = 'users')
    {
      $this->orm = new ORM;
      $this->params = $params;
      $this->table = $table;

      if (isset($params['id'])) {
        $check = $this->orm->read($this->table, $params['id']);
        if ($check) {
          $this->params = $check;
        }
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

    public function count()
    {
      return $this->orm->count($this->table, $this->params);
    }
  }
?>
