<?php
  namespace Model;

  use \PDO;

  class UserModel extends \Core\Entity
  {
    public function __construct($params)
    {

    }

    public function save()
    {
      return Entity::create();
    }
  }
?>
