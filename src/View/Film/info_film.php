<?php session_start(); ?>
<div class="container-fluid">
    <div class="row">
        <div class="col-lg-8 col-lg-offset-2 file">
            <div class="info_film">
               <h2>Film : {{$title}}</h2>
               <p>Genre : {{$genre}}</p>
               <p>Durée : {{$duree_min}}'</p>
               <p>Année de production : {{$annee_prod}}</p>
               <p>Résumé : {{$resum}}</p>
               <a href="/work/PiePHP/film" class="btn btn-lg btn-list">Retourner à la liste de films</a>
            </div>
        </div>
    </div>
</div>
