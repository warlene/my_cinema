<?php if (!isset($_SESSION)) { session_start(); } ?>
<div class="container">
    <div class="row">
      <div class="col-lg-8 col-lg-offset-2">
            <div class="info_film">
               <h2>Le film "{{$title}}" a bien été modifié dans notre filmothèque.</h2>
               <h3>Merci pour votre contribution.</h3>
            </div>
            <div class="return">
              <a href="/work/PiePHP/film"><i class="glyphicon glyphicon-chevron-left"></i>retour</a>
            </div>
        </div>
    </div>
</div>
