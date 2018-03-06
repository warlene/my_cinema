<?php session_start(); ?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-header">
               <h1>Bienvenue {{$firstname}} {{$lastname}}!</h1>
               <h3>Vous pouvez dès à présent naviguer sur My Cinema à votre guise.</h3>
               <a href="/work/PiePHP/film" class="btn btn-lg btn-list">Accéder à la liste de films</a>
            </div>
        </div>
    </div>
</div>
