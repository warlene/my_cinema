<?php if (!isset($_SESSION)) { session_start(); } ?>

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
        <div class="genres" style="margin-bottom:30px;">
          <h2>Liste des films que vous avez vu.</h2>
        </div>
      </div>
  </div>

  <div class="row">
      <div class="col-lg-10 col-lg-offset-1">
          <table class="table" id="table">
              <thead>
                  <tr>
                      <th>films vus</th>
                      <th>date</th>
                      <th>Supprimer</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($film as $key => $value): ?>
                  <tr>
                      <td><?= htmlspecialchars($value)?></td>
                      <td><?= htmlspecialchars($key)?></td>
                      <td><a href="/work/PiePHP/historique/delete/<?= htmlspecialchars($id)?>/<?= htmlspecialchars($value)?>" class="delete"><i class="glyphicon glyphicon-trash"></i></button></td>
                  </tr>
                <?php endforeach; ?>
              </tbody>
          </table>
          <hr>

      </div>
  </div>
</div>
