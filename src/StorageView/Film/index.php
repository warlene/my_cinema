<?php session_start(); ?>

<div class="container">
  <div class="row">
      <div class="col-lg-12">
          <div class="page-header">
              <h1>La filmothèque de MyCinema</h1>
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
        <form class="form-inline" id="title-form" action="film/search_title" method="post" role="form">
          <input type="search" id="search" value="" class="form-control" placeholder="Rechercher un film par titre" size="32px">
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
                      <th>Durée du film</th>
                      <th>Année</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($film as $key => $value): ?>
                  <tr>
                      <td><a href="/work/PiePHP/film/info/<?= htmlspecialchars($value['id_film'])?>" class="film" style="display:block;width:100%;height:100%;"><?= htmlspecialchars($value['titre'])?></a></td>
                      <!-- <td><?= htmlspecialchars($value['genre'])?></td> -->
                      <td><?= htmlspecialchars($value['duree_min'])?></td>
                      <td><?= htmlspecialchars($value['annee_prod'])?></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
          <hr>
      </div>
  </div>
</div>
