<?php session_start(); ?>

<div class="container">
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
          <div class="page-header">
              <h1>La Filmotheque de MyCinema</h1>
          </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-8 col-lg-offset-2 ">
        <div class="delete_film"></div>
          <h3>Liste de tous les films</h3>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-5 col-lg-offset-4">
        <form class="form-inline" id="title-form" action="/work/PiePHP/film/search_title" method="POST" role="form">
          <input type="text" id="search_title" name="search_title" class="form-control" placeholder="Rechercher un film par titre" size="32px">
          <input class="btn btn-md btn-go" type="submit" value="Go!">
        </form>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
          <table class="table" id="table">
              <thead>
                  <tr>
                      <th>Modifier</th>
                      <th>Titre</th>
                      <th>Genre</th>
                      <th>Année</th>
                      <th>Durée du film</th>
                      <th></th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($film as $key => $value): ?>
                  <tr>
                      <td><a href="/work/PiePHP/film/modify/<?= htmlspecialchars($value['id'])?>"><i class="glyphicon glyphicon-edit"></i></a></td>
                      <td><a href="/work/PiePHP/film/info/<?= htmlspecialchars($value['id'])?>" class="film" style="display:block;width:100%;height:100%;"><?= htmlspecialchars($value['titre'])?></a></td>
                      <td><?= htmlspecialchars($genre[intval($value['id_genre'])]['nom'])?></td>
                      <td><?= htmlspecialchars($value['annee_prod'])?></td>
                      <td><?= htmlspecialchars($value['duree_min'])?></td>
                      <td><button class="delete" value="<?= htmlspecialchars($value['id'])?>" onclick="delete_film(<?= htmlspecialchars($value['id'])?>)"><i class="glyphicon glyphicon-trash"></i></button></td>
                  </tr>
                  <script>
                  function delete_film(id) {
                    if (confirm("Êtes-vous sûr de vouloir supprimer ce film?")) {
                      document.location.href = "http://localhost/work/PiePHP/film/delete/"+id;
                    }
                  }
                </script>
                <?php endforeach; ?>
              </tbody>
          </table>
          <hr>
      </div>
  </div>
</div>
