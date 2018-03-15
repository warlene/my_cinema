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
          <h2>Liste de tous les genres</h2>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-5 col-lg-offset-4">
        <form class="form-inline" id="title-form" action="/work/PiePHP/genre/add_genre" method="POST" role="form">
          <input type="text" id="add_genre" name="add_genre" class="form-control" placeholder="ajouter un genre à la liste" size="32px">
          <input class="btn btn-md btn-go" type="submit" value="Ajouter">
        </form>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
        <div class="error" style="margin:30px;">
          <h2><?= htmlspecialchars($error)?></h2>
        </div>
      </div>
  </div>
  <div class="row">
      <div class="col-lg-12">
          <table class="table" id="table">
              <thead>
                  <tr>
                      <th>Modifier</th>
                      <th>Genre</th>
                      <th>Nombre de films associés</th>
                      <th></th>
                      <th>Supprimer</th>
                  </tr>
              </thead>
              <tbody>
                <?php foreach ($genres as $key => $value): ?>
                  <tr>
                      <td>
                        <button type="button" class="btn btn-primary" data-toggle="modal" value="<?= htmlspecialchars($value['id_genre'])?>" data-target="#modal<?= htmlspecialchars($value['id_genre'])?>">
                          <i class="glyphicon glyphicon-edit"></i>
                        </button>
                      </td>
                      <!-- <td><a href="/work/PiePHP/genre/modify/<?= htmlspecialchars($value['id_genre'])?>" onclick="window.open(this.href); return false;"><i class="glyphicon glyphicon-edit"></i></a></td> -->
                      <td><a href="/work/PiePHP/genre/films/<?= htmlspecialchars($value['id_genre'])?>" class="film" style="display:block;width:100%;height:100%;"><?= htmlspecialchars($value['nom'])?></a></td>
                      <td><?= htmlspecialchars($value['nb_film'])?></td>
                      <td></td>
                      <td><button class="delete" value="<?= htmlspecialchars($value['id_genre'])?>" onclick="delete_genre(<?= htmlspecialchars($value['id_genre'])?>)"><i class="glyphicon glyphicon-trash"></i></button></td>
                  </tr>
                  <script>
                  function delete_genre(id) {
                    if (confirm("Êtes-vous sûr de vouloir supprimer ce genre?")) {
                      document.location.href = "http://localhost/work/PiePHP/genre/delete/"+id;
                    }
                  }
                </script>
                <!-- Modal -->
                <div class="modal fade" id="modal<?= htmlspecialchars($value['id_genre'])?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h4 class="modal-title" id="modal<?= htmlspecialchars($value['id_genre'])?>Label">Modifier un genre</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <form action="/work/PiePHP/genre/modify/<?= htmlspecialchars($value['id_genre'])?>" method="POST">
                          <input type="text" name="modif_genre" class="form-control" placeholder="<?= htmlspecialchars($value['nom'])?>" size="32px">
                          <input type="hidden" name="id_genre" value="<?= htmlspecialchars($value['id_genre'])?>">
                      </div>
                      <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
                        <input class="btn btn-md btn-go" type="submit" value="Modifier">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <?php endforeach; ?>
              </tbody>
          </table>
          <hr>


      </div>
  </div>
</div>
