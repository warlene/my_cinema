<?php session_start(); ?>

<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
            <div class="page-header">
                <h1>La filmothèque de MyCinema</h1>
            </div>
        </div>
    </div>
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
            <h3>Résultats pour : "{{$search}}"</h3>
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
        <div class="col-lg-10 col-lg-offset-1">
            <table class="table" id="table">
              <tr>
                  <th>Titre</th>
                  <th>Genre</th>
                  <th>Année</th>
                  <th>Durée du film</th>
              </tr>
          </thead>
          <tbody>
            @foreach ($film as $key => $value)
              <tr>
                  <td><a href="/work/PiePHP/film/info/{{$value['id']}}" class="film" style="display:block;width:100%;height:100%;">{{$value['titre']}}</a></td>
                  <td>{{$genre[intval($value['id_genre'])]['nom']}}</td>
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
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
