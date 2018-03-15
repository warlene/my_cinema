<?php
  namespace Controller;

  use \Model\FilmModel;
  use \Core\Controller;

  class FilmController extends Controller
  {

    public function indexAction()
    {
      $filmModel = new FilmModel(["ORDER BY" => "titre ASC", "LIMIT" => "20"], "");
      $film = $filmModel->find('film');
      $genre = $this->get_genre();
      $this->render('index', ['film' => $film,
                              'genre' => $genre]);
    }

    public function search_titleAction()
    {
      $filmModel = new FilmModel(["WHERE" => "titre LIKE '" . $this->request->search_title . "%' OR titre LIKE '% " . $this->request->search_title . "%'", "ORDER BY" => "titre ASC", "LIMIT" => "20"], "");
      $film = $filmModel->find('film');
      $genreModel = new FilmModel([], "");
      $genre = $genreModel->find('genre');
      $this->render('search_title', ['search' => $this->request->search_title,
                                     'film' => $film,
                                     'genre' => $genre]);
    }

    public function info_filmAction($params)
    {
      $filmModel = new FilmModel(["WHERE" => "id = " . $params[0]], "");
      $film = $filmModel->find('film');
      $film = $film[0];
      $genre = new FilmModel(["WHERE" => "id = " . $film['id_genre']], "");
      $genreName = $genre->find('genre');
      $genreName = $genreName[0];
      $this->render('info_film', ['genre' => $genreName['nom'],
                                  'title' => $film['titre'],
                                  'resum' => $film['resum'],
                                  'duree_min' => $film['duree_min'],
                                  'annee_prod' => $film['annee_prod']]);
    }

    public function add_filmAction()
    {
      $tab_g_d = $this->get_distrib_and_genre();
      $this->render('film_form', ["genres" => $tab_g_d["genres"], "distribs" => $tab_g_d["distribs"]]);

      if(isset($this->request->title)) {
        $tab = new FilmModel(["WHERE" => "titre = '" . $this->request->title . "'"], "");
        $title = $tab->find('film');
        if (!$title) {
          $film = new FilmModel(["titre" => $this->request->title,
                                 "id_genre" => $this->request->genre,
                                 "id_distrib" => $this->request->distrib,
                                 "annee_prod" => $this->request->annee_prod,
                                 "date_debut" =>  $this->request->date_debut,
                                 "date_fin" =>  $this->request->date_fin,
                                 "duree_min" =>  $this->request->duree_min,
                                 "resum" =>  $this->request->resum], "");
          $add = $film->create('film');
          $this->render('add_validate', ["title" =>  $this->request->title]);
        } else {
          $this->render('film_form', ["genres" => $tab_g_d["genres"],
                                      "distribs" => $tab_g_d["distribs"],
                                      "error" => "Ce film est déjà répertorié dans notre Filmothèque. Vous pouvez le modifier dans la section \"Modifer un film\"."]);
        }
      }
    }

    public function deleteAction($id)
    {
      $film = new FilmModel(["id" => $id[0]], "film");
      $delete = $film->delete();
      if ($delete) {
        $this->indexAction();
        ?>
        <script>
            $('.delete_film').textContent = "Le film a bien été supprimé.";
        </script>
        <?php
      }
    }

    public function modifyAction($id)
    {
      $film = new FilmModel(["id" =>  $id[0]], "film");
      $req_genre = new FilmModel(["WHERE" => "id = '" . $film->id_genre . "'"], "");
      $genreName = $req_genre->find('genre');
      $req_distrib = new FilmModel(["WHERE" => "id_distrib = '" . $film->id_distrib . "'"], "");
      $distribName = $req_distrib->find('distrib');
      $genre = $this->get_genre();
      $tab = $this->get_distrib_and_genre();
      $this->render('modify_film', ["id" => $film->id,
                                    "genre" => $genreName[0]["nom"],
                                    "distrib" => $distribName[0]["nom"],
                                    "id_genre" => $film->id_genre,
                                    "id_distrib" => $film->id_distrib,
                                    "titre" => $film->titre,
                                    "resum" => $film->resum,
                                    "date_debut" => $film->date_debut,
                                    "date_fin" => $film->date_fin,
                                    "duree_min" => $film->duree_min,
                                    "annee_prod" => $film->annee_prod,
                                    "genres" => $tab["genres"],
                                    "distribs" => $tab["distribs"]]);
    }

    public function modify_validateAction()
    {
      if(isset($this->request->title)) {
        $tab = new FilmModel(["WHERE" => "titre = '" . $this->request->title . "'"], "");
        $title = $tab->find('film');
        $params = ["id" => $title[0]['id'],
                   "titre" => $this->request->title,
                   "id_genre" => $this->request->genre,
                   "id_distrib" => $this->request->distrib,
                   "annee_prod" => $this->request->annee_prod,
                   "date_debut" => $this->request->date_debut,
                   "date_fin" => $this->request->date_fin,
                   "duree_min" => $this->request->duree_min,
                   "resum" => $this->request->resum];
        if ($this->request->genre !== "") {
          $params['id_genre'] = $this->request->genre;
        } else {
          $params['id_genre'] = NULL;
        }
        if ($this->request->distrib !== "") {
          $params['id_distrib'] = $this->request->distrib;
        } else {
          $params['id_distrib'] = NULL;
        }
        $film = new FilmModel($params, "");
        $modify = $film->save('film');
        $this->render('modify_validate', ["title" =>  $this->request->title]);
      }
    }

    private function get_genre()
    {
      $genreModel = new FilmModel(["ORDER BY" => "nom ASC"], "");
      $genre = $genreModel->find('genre');
      return $genre;
    }

    private function get_distrib()
    {
      $distribModel = new FilmModel(["ORDER BY" => "nom ASC"], "");
      $distrib = $distribModel->find('distrib');
      return $distrib;
    }

    private function get_distrib_and_genre()
    {
      $genre = $this->get_genre();
      $params_genre = [];
      for ($i=0; $i<count($genre); $i++) {
        $params_genre[$genre[$i]['id']] = $genre[$i]['nom'];
      }

      $distrib = $this->get_distrib();
      $params_distrib = [];
      for ($i=0; $i<count($distrib); $i++) {
        $params_distrib[$distrib[$i]['id_distrib']] = $distrib[$i]['nom'];
      }

      return ["genres" => $params_genre, "distribs" => $params_distrib];
    }
  }
