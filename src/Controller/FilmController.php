<?php
  namespace Controller;

  use \Model\FilmModel;
  use \Core\Controller;

  class FilmController extends Controller
  {

    public function indexAction()
    {
      $filmModel = new FilmModel(["LIMIT" => "20"]);
      $film = $filmModel->find('film');
      $this->render('index', ['film' => $film]);
    }

    public function search_titleAction()
    {
      $this->render('search_title');
    }

    public function info_filmAction($params)
    {
      $filmModel = new FilmModel(["WHERE" => "id_film = " . $params[0]]);
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
        var_dump($this->request);
        $film = new FilmModel(["title" => $this->request->title, "id_genre" => $this->request->genre, "id_distrib" => $this->request->distrib, "annee_prod" => $this->request->annee_prod, "date_debut" =>  $this->request->date_debut, "date_fin" =>  $this->request->date_fin, "duree_min" =>  $this->request->duree_min, "resum" =>  $this->request->resum]);
        $add = $film->create('film');
        var_dump($add);
      }
    }
  }
