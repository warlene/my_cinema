<?php
  namespace Controller;

  class UserController extends \Core\Controller
  {
    public static function indexAction()
    {
      echo "UserController et indexAction sont utilisés \n";

    }

    public static function addAction()
    {
      echo "titi\n";

      // if(isset($_POST['email'])) {
      //   $login = new UserModel ;
      //   $check = $login->add_to_bdd($_POST['email'],$_POST['password']);
      //   }
      // }
    }

    public static function loginAction()
    {
      echo "toto\n";

      // if(isset($_POST['email'])) {
      //   $login = new UserModel ;
      //   $check = $login->check_login($_POST['email'],$_POST['password']);
      //   if($check){
      //
      //   }
      // }
    }

  }
?>
