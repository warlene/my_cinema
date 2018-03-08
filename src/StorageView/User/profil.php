<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
               <h1>Votre profil</h1>
               <h3>Votre profil est vide. Vous pouvez le remplir grâce au formulaire ci-dessous:</h3>
            </div>
            <div class="form_film">
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="title_film" class="col-4 col-form-label">votre film préféré</label>
                  <div class="col-4">
                    <input class="form-control" type="text" name="best_film" id="best_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genres" class="col-4 col-form-label">Vos genres favoris</label>
                  <div class="col-4">
                    <select multiple class="selectpicker col-12" name="genres" id="genres" style="height:100px;">
                      <option value=""></option>
                      <?php foreach ($genres as $key => $genre): ?>
                      <option value=<?= htmlspecialchars($genre)?>><?= htmlspecialchars($genre)?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="last_film" class="col-4 col-form-label">le dernier film vu:</label>
                  <div class="col-4">
                    <input class="form-control" type="text" name="last_film" id="last_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label"></label>
                  <div class="col-4">
                    <input class="btn add" type="submit" value="Ajouter" id="valider">
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
