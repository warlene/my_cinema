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
            <h3>Résultats pour : "<?= htmlspecialchars($search)?>"</h3>
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
              <tr>
                  <th>Titre</th>
                  <th>Année</th>
                  <th>Durée du film</th>
              </tr>
          </thead>
          <tbody>
            <?php foreach ($film as $key => $value): ?>
              <tr>
                  <td><a href="/work/PiePHP/film/info/<?= htmlspecialchars($value['id'])?>" class="film" style="display:block;width:100%;height:100%;"><?= htmlspecialchars($value['titre'])?></a></td>
                  <!-- <td><?= htmlspecialchars($value['genre'])?></td> -->
                  <td><?= htmlspecialchars($value['annee_prod'])?></td>
                  <td><?= htmlspecialchars($value['duree_min'])?></td>
              </tr>
            <?php endforeach; ?>
          </tbody>
            </table>
            <hr>
        </div>
    </div>
  </div>
<script src="//rawgithub.com/stidges/jquery-searchable/master/dist/jquery.searchable-1.0.0.min.js"></script>
