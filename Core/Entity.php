<?php
  namespace Core;

  use \Core\ORM;

  class Entity
  {
    public $params;

    public function __construct($params)
    {
      foreach ($params as $key => $value) {
        $this->$key = $value;
      }
      $this->params = ORM::read($this->table, $this->id);
    }

    public function create()
    {
      return ORM::create($this->table, $this->id, $this->params);

    }
  }
?>
