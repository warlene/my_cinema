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
                  <div class="col-6">
                    <input class="form-control" type="text" name="title" id="title_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="distrib" class="col-4 col-form-label">Vos genres favoris</label>
                  <div class="col-6">
                    <select class="form-control" name="distrib" id="distrib" style="height:35px;">
                      <option value=""></option>
                      <option value=""></option>
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_prod" class="col-4 col-form-label">le dernier film vu:</label>
                  <div class="col-6">
                    <input class="form-control" type="text" name="annee_prod" placeholder="ex: 2001" id="date_prod">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_debut" class="col-4 col-form-label">Vos genres favoris</label>
                  <div class="col-6">
                    <input class="form-control" type="date" name="date_debut" id="date_debut">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_fin" class="col-4 col-form-label">date de fin d'exploitation en salle</label>
                  <div class="col-6">
                    <input class="form-control" type="date" name="date_fin" id="date_fin">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="duree_min" class="col-4 col-form-label">Durée</label>
                  <div class="col-6">
                    <input class="form-control" type="text" name="duree_min" placeholder="en minutes" id="duree_min">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label">Résumé</label>
                  <div class="col-6">
                    <input class="form-control" type="textarea" name="resum" id="resum">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label"></label>
                  <div class="col-6">
                    <input class="btn" type="submit" value="Ajouter" id="valider">
                  </div>
                </div>
              </form>
        </div>
    </div>
</div>
