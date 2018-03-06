<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="info_film">
               <h1>Film : <?= htmlspecialchars($title)?></h1>
               <p>Genre : <?= htmlspecialchars($genre)?></p>
               <p>Durée : <?= htmlspecialchars($duree_min)?></p>
               <p>Année de production : <?= htmlspecialchars($annee_prod)?></p>
               <p>Résumé : <?= htmlspecialchars($resum)?></p>
               <!-- <a href="/work/PiePHP/film" class="btn btn-lg btn-list">Accéder à la liste de films</a> -->
            </div>
        </div>
    </div>
</div>
