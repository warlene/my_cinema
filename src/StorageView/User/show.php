<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="page-header">

            <h2>Vos informations personnelles</h2>

            <div id="recap_info" class="info_user">
               <h4>Nom : <?= htmlspecialchars($lastname)?></h4>
               <h4>Prénom : <?= htmlspecialchars($firstname)?></h4>
               <h4>Email : <?= htmlspecialchars($email)?></h4>
               <h4>Mot de passe : *****</h4>
               <button class="btn add" id="info_user">Modifier vos informations</button>
            </div>

            <div id="form_info">
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="lastname" class="col-4 col-form-label">Nom</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="<?= htmlspecialchars($lastname)?>" name="lastname" id="lastname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="firstname" class="col-4 col-form-label">Prénom</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="<?= htmlspecialchars($firstname)?>" name="firstname" id="firstname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-4 col-form-label">Email</label>
                  <div class="col-4">
                    <input class="form-control" type="email" value="<?= htmlspecialchars($email)?>" name="email" id="email">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password" class="col-4 col-form-label">Mot de passe</label>
                  <div class="col-4">
                    <input class="form-control" type="password" name="password" id="password">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="password2" class="col-4 col-form-label">Confirmer le mot de passe</label>
                  <div class="col-4">
                    <input class="form-control" type="password" name="password2">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label"></label>
                  <div class="col-2">
                    <input class="btn add" type="submit" value="Ajouter" id="valider">
                  </div>
                  <div class="col-2">
                    <input class="btn add" type="submit" value="retour" id="retour_info">
                  </div>
                </div>
              </form>
            </div>

            <div id="recap_pref" class="info_user">
               <h2>Vos préférences</h2>
               <h4>Votre film préféré : <?= htmlspecialchars($best_film)?></h4>
               <h4>Vos genres préférés : <?= htmlspecialchars($genres)?></h4>
               <h4>Votre dernier film vu : <?= htmlspecialchars($last_film)?></h4>
               <button class="btn add" id="preference">Modifier vos préférences</button>
            </div>

            <div id="form_pref">
              <h2>Vos préférences</h2>
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="title_film" class="col-4 col-form-label">votre film préféré</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="<?= htmlspecialchars($best_film)?>"  name="best_film" id="best_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genres" class="col-4 col-form-label">Vos genres favoris</label>
                  <div class="col-4">
                    <select multiple class="selectpicker col-12" value="<?= htmlspecialchars($genres)?>" name="genres" id="genres" style="height:100px;">
                      <option value=""></option>
                      <?php foreach ($genre as $key => $value): ?>
                      <option value=<?= htmlspecialchars($value)?>><?= htmlspecialchars($value)?></option>
                      <?php endforeach; ?>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="last_film" class="col-4 col-form-label">le dernier film vu:</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="<?= htmlspecialchars($last_film)?>" name="last_film" id="last_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label"></label>
                  <div class="col-2">
                    <input class="btn add" type="submit" value="Ajouter" id="modifier">
                  </div>
                  <div class="col-2">
                    <input class="btn add" type="submit" value="retour" id="retour_pref">
                  </div>
                </div>
              </form>
            </div>

          </div>
        </div>
    </div>
</div>
<script src="/work/PiePHP/webroot/js/form_profil.js"></script>
