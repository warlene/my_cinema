<?php
  namespace Model;

  use \PDO;

  class UserModel extends \Core\Entity
  {
    public function __construct($params, $table)
    {
      parent::__construct($params, $table);
    }

    public function save($table)
    {
      return parent::save($table);
    }

    public function find($table)
    {
      return parent::find($table);
    }
  }
?>
