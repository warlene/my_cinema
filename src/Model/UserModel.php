<?php
  namespace Model;

  use \PDO;

  class UserModel extends \Core\Entity
  {
    public function __construct($params)
    {
      parent::__construct($params);
    }

    public function save($table)
    {
      return parent::save($table);
    }

  }
?>
