<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
          <div class="page-header">

            <h2>Vos informations personnelles</h2>

            <div id="recap" class="info_user">
               <h4>Nom : {{$lastname}}</h4>
               <h4>Prénom : {{$firstname}}</h4>
               <h4>Email : {{$email}}</h4>
               <h4>Mot de passe : *****</h4>

               <h2>Vos préférences</h2>
               <h4>Votre film préféré : {{$best_film}}</h4>
               <h4>Vos genres préférés : {{$genres}}</h4>
               <h4>Votre dernier film vu : {{$last_film}}</h4>
               <button class="btn add" id="info_user">Modifier vos informations</button>
            </div>

            <div id="form_user">
              <form method='POST' action=''>
                <div class="form-group row">
                  <label for="lastname" class="col-4 col-form-label">Nom</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="{{$lastname}}" name="lastname" id="lastname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="firstname" class="col-4 col-form-label">Prénom</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="{{$firstname}}" name="firstname" id="firstname">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="email" class="col-4 col-form-label">Email</label>
                  <div class="col-4">
                    <input class="form-control" type="email" value="{{$email}}" name="email" id="email">
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
                <h2>Vos préférences</h2>
                <div class="form-group row">
                  <label for="title_film" class="col-4 col-form-label">votre film préféré</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="{{$best_film}}"  name="best_film" id="best_film">
                  </div>
                </div>
                <div class="form-group row">
                  <label for="genres" class="col-4 col-form-label">Vos genres favoris</label>
                  <div class="col-4">
                    <select multiple class="selectpicker col-12" value="{{$genres}}" name="genres" id="genres" style="height:100px;">
                      <option value=""></option>
                      @foreach ($genre as $key => $value)
                      <option value={{$value}}>{{$value}}</option>
                      @endforeach
                    </select>
                  </div>
                </div>
                <div class="form-group row">
                  <label for="last_film" class="col-4 col-form-label">le dernier film vu:</label>
                  <div class="col-4">
                    <input class="form-control" type="text" value="{{$last_film}}" name="last_film" id="last_film">
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
    </div>
</div>
<script src="/work/PiePHP/webroot/js/form_profil.js"></script>
