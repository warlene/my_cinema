<?php if (!isset($_SESSION)) { session_start(); } ?>
<div class="container">
    <div class="row">
        <div class="col-lg-8">
            <div class="form_film">
              <h2>Modifier la fiche de "{{$titre}}"</h2>
              <form method='POST' action='/work/PiePHP/film/modifyValid' role="form">
                <div class="form-group row">
                  <label for="title_film" class="col-4 offset-2 col-form-label">Titre du film</label>
                  <div class="col-6">
                    <input class="form-control champs" type="text" name="title" value="{{$titre}}" id="title_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genre" class="col-4 offset-2 col-form-label">Genre</label>
                  <div class="col-6">
                    <select class="form-control champs" name="genre" id="genre" style="height:35px;">
                      <option selected value="{{$id_genre}}">{{$genre}}</option>
                      <option value=""></option>
                      @foreach ($genres as $key => $value)
                      <option value={{$key}}>{{$value}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="distrib" class="col-4 offset-2 col-form-label">Distributeur</label>
                  <div class="col-6">
                    <select class="form-control champs" name="distrib" id="distrib" style="height:35px;">
                      <option selected value="{{$id_distrib}}">{{$distrib}}</option>
                      <option value=""></option>
                      @foreach ($distribs as $key => $value)
                      <option value={{$key}}>{{$value}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_prod" class="col-4  offset-2 col-form-label">Année de production</label>
                  <div class="col-6">
                    <input class="form-control champs" type="text" name="annee_prod" value="{{$annee_prod}}" placeholder="ex: 2001" id="date_prod">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_debut" class="col-4 offset-2 col-form-label">date de début de sortie en salle</label>
                  <div class="col-6">
                    <input class="form-control champs" type="date" name="date_debut" value="{{$date_debut}}" id="date_debut">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="date_fin" class="col-4 offset-2 col-form-label">date de fin d'exploitation en salle</label>
                  <div class="col-6">
                    <input class="form-control champs" type="date" name="date_fin" value="{{$date_fin}}" id="date_fin">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="duree_min" class="col-4 offset-2 col-form-label">Durée</label>
                  <div class="col-6">
                    <input class="form-control champs" type="text" name="duree_min" value="{{$duree_min}}" placeholder="en minutes" id="duree_min">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 offset-2 col-form-label">Résumé</label>
                  <div class="col-6">
                    <input class="form-control champs" type="textarea" value="{{$resum}}" name="resum" id="resum">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="resum" class="col-4 offset-2 col-form-label"></label>
                  <div class="col-6">
                    <input class="btn btn-success btn-lg" type="submit" value="Ajouter" id="valider">
                  </div>
                </div>
              </form>
              @isset($error)
              <div class="error">
                <p>{{$error}}</p>
              </div>
              @endisset
            </div>
        </div>
    </div>
</div>
