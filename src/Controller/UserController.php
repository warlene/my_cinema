<?php
  namespace Controller;

  use \Model\UserModel;
  use \Core\Controller;

  class UserController extends Controller
  {

    public function indexAction()
    {
      echo "UserController et indexAction sont utilisés \n";
      $this->render('index', ['couleur'=>'rose']);
    }

    public function registerAction()
    {
      $this->render('register');
      $user = new UserModel(["email" => $this->request->email, "password" => $this->request->password]);
      $user->save();

    }

    public function loginAction()
    {
      $this->render('login');

      $userModel = new UserModel(["WHERE" => "email = '" . $this->request->email_login . "' AND password = '" . $this->request->password_login . "'"]);
      $login = $userModel->find();
      if (!$login) {
        echo "Login ou mot de passe inconnu.";
      }
    }

  }
?>
