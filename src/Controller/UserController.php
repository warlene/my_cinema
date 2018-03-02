<?php
  namespace Controller;

  use \Model\UserModel;
  use \Core\Controller;

  class UserController extends Controller
  {

    public function indexAction()
    {
      $this->render('index', ['params'=>'2']);
    }

    public function registerAction()
    {
      // $this->render('register');
      if (isset($this->request->email)) {
        $userModel = new UserModel(["WHERE" => "lastname = '" . $this->request->lastname . "' AND firstname = '" . $this->request->firstname . "'  AND email = '" . $this->request->email . "'"]);
        $user_exists = $userModel->find();
        if (!$user_exists) {
          $user = new UserModel(["lastname" => $this->request->lastname, "firstname" => $this->request->firstname, "email" => $this->request->email, "password" => sha1($this->request->password)]);
          $id = $user->save();
          if (!is_array($id)) {
            $this->render('index', ["lastname" => $this->request->lastname, "firstname" => $this->request->firstname]);
            $_SESSION['lastname'] = $this->request->lastname;
            $_SESSION['firstname'] = $this->request->firstname;
            $_SESSION['id_user'] = $id;
          }
        } else {
          echo "Ce compte existe déjà. Vous pouvez vous connecter directement <a href='user/login' class='btn btn-lg btn-secondary'>ici</a>.";
        }
      }
    }

    public function loginAction()
    {
      // $this->render('login');
      if (isset($this->request->email_login)) {
        $userModel = new UserModel(["WHERE" => "email = '" . $this->request->email_login . "' AND password = '" . $this->request->password_login . "'"]);
        $login = $userModel->find();
        if (!$login) {
          echo "Login ou mot de passe inconnu.";
        }
      }
    }

  }
