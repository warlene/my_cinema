<?php session_start(); ?>

<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <div class="page-header">
              <h1>La Filmotheque de MyCinema</h1>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <h3>Liste de tous les films</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-4 col-lg-offset-4">
        <form class="form-inline" id="title-form" action="/work/PiePHP/film/search_title" method="POST" role="form">
          <input type="text" id="search_title" name="search_title" class="form-control" placeholder="Rechercher un film par titre" size="32px">
          <input class="btn btn-md btn-go" type="submit" value="Go!">
        </form>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <table class="table" id="table">
              <thead>
                  <tr>
                      <th>Titre</th>
                      <th>Année</th>
                      <th>Durée du film</th>
                  </tr>
              </thead>
              <tbody>
                @foreach ($film as $key => $value)
                  <tr>
                      <td><a href="/work/PiePHP/film/info/{{$value['id']}}" class="film" style="display:block;width:100%;height:100%;">{{$value['titre']}}</a></td>
                      <!-- <td>{{$value['genre']}}</td> -->
                      <td>{{$value['annee_prod']}}</td>
                      <td>{{$value['duree_min']}}</td>
                  </tr>
                @endforeach
              </tbody>
          </table>
          <hr>
      </div>
  </div>
</div>
