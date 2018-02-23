<?php
  namespace Controller;

  use \Model\UserModel;

  class UserController extends \Core\Controller
  {
    public function indexAction()
    {
      echo "UserController et indexAction sont utilisés \n";
      $this->render('index', ['couleur'=>'rose']);

    }

    public function registerAction()
    {
      echo "titi\n";
      $this->render('register');
      if (isset($_POST['email']) && isset($_POST['password'])) {
        $userModel = new \Model\UserModel;
        $userModel->create($_POST['email'], $_POST['password']);
      }
    }

    public function loginAction()
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
