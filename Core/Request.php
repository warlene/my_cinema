<?php
  namespace Core;

  class REQUEST
  {
    protected $get;
    protected $post;

    public function __construct($_GET, $_POST)
    {
      $this->get = $_GET;
      $this->post = $_POST;
    }

    protected function clean_input()
    {
      
    }
  }
?>
