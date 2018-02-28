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
      $user = new UserModel(["id"=>3, "table" => "users"]);
      if ($user->id) {
        echo "ID EXISTANT";
      }
      // $id = $orm->create('users', ['email' => $this->request->email, 'password' => $this->request->password]);
      // $name = $orm->read('users', 7);
      // $id = $orm->find('users', ['WHERE' => '2', 'ORDER BY' => 'id ASC', 'LIMIT' => 7]);
      // if (isset($this->request->"email") && isset($_POST['password'])) {
        // $userModel = new \Core\ORM;
        // $userModel->create('users', $_POST['password']);
      // }
      // if (isset($_POST['email']) && isset($_POST['password'])) {
      //   $userModel = new \Model\UserModel;
      //   $userModel->create($_POST['email'], $_POST['password']);
      // }
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
