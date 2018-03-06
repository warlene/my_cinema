<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="form_film">
              <h2>Ajouter un film à la filmothèque</h2>
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="title_film" class="col-4 col-form-label">Titre du film</label>
                  <div class="col-7">
                    <input class="form-control" type="text" id="title_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_prod" class="col-4 col-form-label">date de production</label>
                  <div class="col-7">
                    <input class="form-control" type="text" placeholder="01/01/2000" id="date_prod">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_debut" class="col-4 col-form-label">date de début de sortie en salle</label>
                  <div class="col-7">
                    <input class="form-control" type="text" placeholder="01/01/2000" id="date_debut">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_fin" class="col-4 col-form-label">date de fin d'exploitation en salle</label>
                  <div class="col-7">
                    <input class="form-control" type="text" placeholder="01/01/2000" id="date_fin">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="duree_min" class="col-4 col-form-label">Durée</label>
                  <div class="col-7">
                    <input class="form-control" type="text" placeholder="en minutes" id="duree_min">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label">Résumé</label>
                  <div class="col-7">
                    <input class="form-control" type="textarea" id="resum">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 col-form-label"></label>
                  <div class="col-7">
                    <input class="btn" type="submit" value="Ajouter" id="valider">
                  </div>
                </div>
              </form>
            </div>
        </div>
    </div>
</div>
