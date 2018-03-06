<?php
  namespace Model;

  use \PDO;

  class FilmModel extends \Core\Entity
  {
    public function __construct($params)
    {
      parent::__construct($params);
    }

    public function find($table)
    {
      return parent::find($table);
    }
  }
