<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="form_film">
              <h2>Ajouter un film à la filmothèque</h2>
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="title_film" class="col-4 offset-2 col-form-label">Titre du film</label>
                  <div class="col-6">
                    <input class="form-control" type="text" name="title" id="title_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genre" class="col-4 offset-2 col-form-label">Genre</label>
                  <div class="col-6">
                    <select class="form-control" name="genre" id="genre" style="height:35px;">
                      <option value=""></option>
                      <?php foreach ($genres as $key => $genre): ?>
                      <option value=<?= htmlspecialchars($key)?>><?= htmlspecialchars($genre)?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="distrib" class="col-4 offset-2 col-form-label">Distributeur</label>
                  <div class="col-6">
                    <select class="form-control" name="distrib" id="distrib" style="height:35px;">
                      <option value=""></option>
                      <?php foreach ($distribs as $key => $distrib): ?>
                      <option value=<?= htmlspecialchars($key)?>><?= htmlspecialchars($distrib)?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_prod" class="col-4  offset-2 col-form-label">Année de production</label>
                  <div class="col-6">
                    <input class="form-control" type="text" name="annee_prod" placeholder="ex: 2001" id="date_prod">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_debut" class="col-4 offset-2 col-form-label">date de début de sortie en salle</label>
                  <div class="col-6">
                    <input class="form-control" type="date" name="date_debut" id="date_debut">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_fin" class="col-4 offset-2 col-form-label">date de fin d'exploitation en salle</label>
                  <div class="col-6">
                    <input class="form-control" type="date" name="date_fin" id="date_fin">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="duree_min" class="col-4 offset-2 col-form-label">Durée</label>
                  <div class="col-6">
                    <input class="form-control" type="text" name="duree_min" placeholder="en minutes" id="duree_min">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 offset-2 col-form-label">Résumé</label>
                  <div class="col-6">
                    <input class="form-control" type="textarea" name="resum" id="resum">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 offset-2 col-form-label"></label>
                  <div class="col-6">
                    <input class="btn" type="submit" value="Ajouter" id="valider">
                  </div>
                </div>
              </form>
              <?php if (isset($error)): ?>
              <div class="error">
                <p><?= htmlspecialchars($error)?></p>
              </div>
              <?php endif; ?>
            </div>
        </div>
    </div>
</div>
