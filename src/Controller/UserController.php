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
      if (isset($this->request->email)) {
        $userModel = new UserModel(["WHERE" => "lastname = '" . $this->request->lastname . "' AND firstname = '" . $this->request->firstname . "'  AND email = '" . $this->request->email . "'"], "");
        $user_exists = $userModel->find('users');
        if (!$user_exists) {
          $user = new UserModel(["lastname" => $this->request->lastname,
                                 "firstname" => $this->request->firstname,
                                 "email" => $this->request->email,
                                 "password" => sha1($this->request->password)], "");
          $id = $user->save('users');
          $profil = new UserModel(["id" => $id], "");
          $add = $profil->create('info_user');
          if (!is_array($id)) {
            $this->render('index', ["lastname" => $this->request->lastname,
                                    "firstname" => $this->request->firstname]);
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
      if (isset($this->request->email)) {
        $userModel = new UserModel(["WHERE" => "email = '" . $this->request->email . "' AND password = '" . sha1($this->request->password) . "'"], "");
        $login = $userModel->find('users');
        if (!$login) {
          echo "Login ou mot de passe inconnu.";
        } else {
          $this->render('index', ["lastname" => $login[0]['lastname'],
                                  "firstname" => $login[0]['firstname'] ]);
          $_SESSION['lastname'] = $login[0]['lastname'];
          $_SESSION['firstname'] = $login[0]['firstname'];
          $_SESSION['id_user'] = $login[0]['id'];
        }
      }
    }

    public function logoutAction()
    {
      $this->render('logout');
      $_SESSION = array();
      session_destroy();
    }

    public function profilAction($id)
    {
      $tab = new UserModel(['id' => intval($id[0])], 'info_user');
      $user = new UserModel(['id' => intval($id[0])], 'users');

      $req = new UserModel([], "");
      $genre = $req->find('genre');
      $params_genre = [];
      for ($i=0; $i<count($genre); $i++) {
        $params_genre[$genre[$i]['id_genre']] = $genre[$i]['nom'];
      }
      $this->render('show', ["genre" => $params_genre,
                             "best_film" => $tab->best_film,
                             "genres" => $tab->genres,
                             "last_film" => $tab->last_film,
                             "lastname" => $user->lastname,
                             "firstname" => $user->firstname,
                             "email" => $user->email]);

      if(isset($this->request->best_film)) {
        if (!empty($this->request->password) && !empty($this->request->password)) {
          if ($this->request->password === $this->request->password2) {
            $check = new UserModel(['id' => intval($id[0]),
                                    "lastname" => $this->request->lastname,
                                    "firstname" => $this->request->firstname,
                                    "email" => $this->request->email,
                                    "password" => sha1($this->request->password)], "");
            $add_user = $check->save('users');
            $film = new UserModel(["id" => $_SESSION['id_user'],
                                   "best_film" => $this->request->best_film,
                                   "genres" => $this->request->genres,
                                   "last_film" => $this->request->last_film], "");
            $add_pref = $film->save('info_user');
          } else {
            echo "Les mots de passe ne sont pas identiques." ;
          }
        } else {
          echo "Veuillez remplir le mot de passe." ;
        }
      }
    }

  }
