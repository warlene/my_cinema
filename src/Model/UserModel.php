<?php
  require_once ('src/Controller/UserController.php');
  include 'Model.php';
  
  class UserModel
  {
    public function add_to_bdd($email, $password)
    {
      // $bdd = this->bdd_connect();
      // $insert = "INSERT INTO users VALUES('" . $email . "', '" . $password . "')";
      // $req = $bdd->prepare($insert);
      // $req->execute();
    }

    public function check_login($email, $password)
    {
      // $bdd = this->bdd_connect();
      // $select = "SELECT email, password FROM users WHERE email=:email AND password=:password";
      // $req = $bdd->prepare($select);
      // $req->execute(array(':email' => $email, ':password' => $password));
      // $result = $req->fetch(PDO::FETCH_ASSOC);
      // return $result;
    }

  }
?>
