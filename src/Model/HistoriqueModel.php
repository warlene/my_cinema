<?php
  namespace Model;

  use \PDO;

  class HistoriqueModel extends \Core\Entity
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

    public function delete()
    {
      return parent::delete();
    }

    public function create($table)
    {
      return parent::create($table);
    }

    public function deleteHistory($table)
    {
      return parent::deleteHistory($table);
    }
  }
?>
