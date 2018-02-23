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
      $this->render('register');
      if (isset($_POST['email']) && isset($_POST['password'])) {
        $userModel = new \Model\UserModel;
        $userModel->create($_POST['email'], $_POST['password']);
      }
    }

    public function loginAction()
    {
      $this->render('login');
      if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
        $email = $_POST['email_login'];
        $password = $_POST['password_login'];

        $userModel = new \Model\UserModel;
        $login = $userModel->read($email, $password);
        if (!$login) {
          echo "Login ou mot de passe inconnu.";
        }
      }
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
