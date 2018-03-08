<?php
  namespace Controller;

  use \Model\FilmModel;
  use \Core\Controller;

  class FilmController extends Controller
  {

    public function indexAction()
    {
      $filmModel = new FilmModel(["ORDER BY" => "titre ASC", "LIMIT" => "20"]);
      $film = $filmModel->find('film');
      $this->render('index', ['film' => $film]);
    }

    public function search_titleAction()
    {
      $filmModel = new FilmModel(["WHERE" => "titre LIKE '" . $this->request->search_title . "%' OR titre LIKE '% " . $this->request->search_title . "%'", "ORDER BY" => "titre ASC", "LIMIT" => "20"]);
      $film = $filmModel->find('film');
      $this->render('search_title', ['search' => $this->request->search_title, 'film' => $film]);
    }

    public function info_filmAction($params)
    {
      $filmModel = new FilmModel(["WHERE" => "id = " . $params[0]]);
      $film = $filmModel->find('film');
      $film = $film[0];
      $genre = new FilmModel(["WHERE" => "id_genre = " . $film['id_genre']]);
      $genreName = $genre->find('genre');
      $genreName = $genreName[0];
      $this->render('info_film', ['genre' => $genreName['nom'], 'title' => $film['titre'], 'resum' => $film['resum'], 'duree_min' => $film['duree_min'], 'annee_prod' => $film['annee_prod']]);
    }

    public function add_filmAction()
    {
      $tab = new FilmModel([]);
      $genre = $tab->find('genre');

      $params_genre = [];
      for ($i=0; $i<count($genre); $i++) {
        $params_genre[$genre[$i]['id_genre']] = $genre[$i]['nom'];
      }

      $distrib = $tab->find('distrib');
      $params_distrib = [];
      for ($i=0; $i<count($distrib); $i++) {
        $params_distrib[$distrib[$i]['id_distrib']] = $distrib[$i]['nom'];
      }

      $this->render('film_form', ["genres" => $params_genre, "distribs" => $params_distrib]);

      if(isset($this->request->title)) {
        $tab = new FilmModel(["WHERE" => "titre = '" . $this->request->title . "'"]);
        $title = $tab->find('film');
        if (!$title) {
          $film = new FilmModel(["titre" => $this->request->title, "id_genre" => $this->request->genre, "id_distrib" => $this->request->distrib, "annee_prod" => $this->request->annee_prod, "date_debut" =>  $this->request->date_debut, "date_fin" =>  $this->request->date_fin, "duree_min" =>  $this->request->duree_min, "resum" =>  $this->request->resum]);
          $add = $film->create('film');
          $this->render('add_validate', ["title" =>  $this->request->title]);
        } else {
          $this->render('film_form', ["genres" => $params_genre, "distribs" => $params_distrib, "error" => "Ce film est déjà répertorié dans notre Filmothèque. Vous pouvez le modifier dans la section \"Modifer un film\"."]);
        }
      }
    }
  }
