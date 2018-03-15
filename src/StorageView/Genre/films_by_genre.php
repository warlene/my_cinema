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
            <h2>Liste des films pour le genre "<?= htmlspecialchars($genre)?>"</h2><br/><br/>
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
