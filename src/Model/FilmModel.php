<?php
  namespace Model;

  use \PDO;

  class FilmModel extends \Core\Entity
  {
    public function __construct($params, $table)
    {
      parent::__construct($params, $table);
    }

    public function find($table)
    {
      return parent::find($table);
    }

    public function create($table)
    {
      return parent::create($table);
    }

    public function delete()
    {
      return parent::delete();
    }
  }
