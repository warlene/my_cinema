<?php
  namespace Controller;

  use \Model\HistoriqueModel;
  use \Core\Controller;

  class HistoriqueController extends Controller
  {

    public function indexAction($id)
    {
      $last = new HistoriqueModel(["WHERE" => "id_membre = " . $id[0], "ORDER BY" => "date DESC"], "");
      $last_film = $last->find('historique_membre');
      $film = [];
      for ($i=0; $i<count($last_film); $i++) {
        $film[$last_film[$i]['date']] = $last_film[$i]['last_film'];
      }
      $this->render('historique', ["film" => $film, "id" => "$id[0]"]);
    }

    public function deleteAction($id)
    {
      $last_film = urldecode($id[1]);
      $user = new HistoriqueModel(["id" => $id[0], "last_film" => $last_film], "");
      $delete = $user->deleteHistory("historique_membre");
      if ($delete) {
        header('Location: http://localhost/work/PiePHP/historique/index/' . $id[0]);
      }
    }
  }
