<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="info_film">
               <h1>Film : {{$title}}</h1>
               <p>Genre : {{$genre}}</p>
               <p>Durée : {{$duree_min}}</p>
               <p>Année de production : {{$annee_prod}}</p>
               <p>Résumé : {{$resum}}</p>
               <!-- <a href="/work/PiePHP/film" class="btn btn-lg btn-list">Accéder à la liste de films</a> -->
            </div>
        </div>
    </div>
</div>
