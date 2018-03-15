<?php
  namespace Controller;

  use \Model\genreModel;
  use \Core\Controller;

  class GenreController extends Controller
  {

    public function listeAction($error = null)
    {
      $genres = $this->get_genre();
      $array = [];
      for ($i=0;$i<count($genres);$i++) {
        $genreModel = new GenreModel(["WHERE" => "id_genre = '" . $genres[$i]['id'] . "'" ], "film");
        $count = $genreModel->count();
        $array[$genres[$i]['id']] = ["nom" => $genres[$i]['nom'], "nb_film" => $count['COUNT(*)'], 'id_genre' => $genres[$i]['id']];
      }
      $this->render('liste', ['genres' => $array, 'error' => $error]);
    }

    public function films_by_genreAction($id_genre)
    {
      $genreModel = new GenreModel(["WHERE" => "id_genre = '" . $id_genre[0] . "'", "ORDER BY" => "titre ASC" ], "");
      $films = $genreModel->find("film");
      $genre = new GenreModel(["WHERE" => "id = '" . $id_genre[0] . "'"], "");
      $genreName = $genre->find("genre");
      $this->render('films_by_genre', ['film' => $films, 'genre' => $genreName[0]['nom']]);
    }

    public function add_genreAction()
    {
      $genreModel = new GenreModel(["WHERE" => "nom = '" . $this->request->add_genre . "'"], "");
      $genre = $genreModel->find("genre");
      if (empty($genre)) {
        $genreModel = new GenreModel(["nom" => $this->request->add_genre], "");
        $add = $genreModel->save("genre");
        $valid = $this->request->add_genre . " a bien été ajouté.";
        $this->listeAction($valid);
      } else {
        $error = "Ce genre existe déjà.";
        $this->listeAction($error);
      }
    }

    public function deleteAction($id)
    {
      $name = new GenreModel(["WHERE" => "id = " . $id[0]], "");
      $check = $name->find("genre");
      $genre = new GenreModel(["id" => $id[0]], "genre");
      $delete = $genre->delete();
      if ($delete) {
        $valid = "Le genre \"". $check[0]['nom']. "\" a bien été supprimé.";
        $this->listeAction($valid);
      } else {
        $error = "Echec lors de la suppression de \"". $check[0]['nom']. "\"";
        $this->listeAction($error);
      }
    }

    public function modifyAction($id)
    {
      $genre = new GenreModel(["id" => $id[0], "nom" => $this->request->modif_genre], "");
      $change = $genre->save("genre");
      if ($change) {
        $valid = "Le genre \"". $this->request->modif_genre . "\" a bien été modifié.";
        $this->listeAction($valid);
      } else {
        $error = "Echec lors de la modification de \"". $this->request->modif_genre . "\"";
        $this->listeAction($error);
      }
    }

    private function get_genre()
    {
      $genreModel = new GenreModel(["ORDER BY" => "nom ASC"], "");
      $genre = $genreModel->find('genre');
      return $genre;
    }
  }
