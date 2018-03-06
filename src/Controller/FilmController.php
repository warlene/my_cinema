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
      $this->render('film_form');
    }
  }
