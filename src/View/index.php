<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport"
 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link href="/work/PiePHP/webroot/css/sidebar.css" rel="stylesheet">
 <link href="/work/PiePHP/webroot/css/style.css" rel="stylesheet">
 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/css/bootstrap-select.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/bootstrap-select.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.12.4/js/i18n/defaults-*.min.js"></script>

 <title>Pie PHP</title>
</head>

<body>
    <div class="container-fluid">
      <div class="row">
        <?php if (isset($_SESSION)) { ?>
          <div class="col-md-2 col-sm-4 sidebar1">
              <div class="logo">
                  <img src="/work/PiePHP/webroot/assets/logo_cinema.jpg" class="img-responsive center-block" alt="Logo" height="120" width="120">
              </div>
              <br>
              <div class="left-navigation">
                  <ul class="list">
                    <li><a href="/work/PiePHP/film">Accueil</a></li>
                    <li>
                      <a data-toggle="collapse" href="#collapseFilm" role="button" aria-expanded="false" aria-controls="collapseFilm">Film</a>
                          <div class="collapse" id="collapseFilm">
                              <ul class="underlist">
                                <li><a href="/work/PiePHP/film/add">Ajouter un film</a></li>
                                <li><a href="#">Modifier un film</a></li>
                                <li><a href="#">Supprimer un film</a></li>
                              </ul>
                          </div>
                    </li>
                    <li>
                      <a data-toggle="collapse" href="#collapseGenre" role="button" aria-expanded="false" aria-controls="collapseGenre">genre</a>
                          <div class="collapse" id="collapseGenre">
                              <ul class="underlist">
                                <li><a href="/work/PiePHP/genre/add">Ajouter un genre</a></li>
                                <li><a href="#">Modifier un genre</a></li>
                                <li><a href="#">Supprimer un genre</a></li>
                              </ul>
                          </div>
                    </li>
                    <li>historique</li>
                  </ul>
              </div>
          </div>
       <?php } ?>
          <div class="col-md-10 col-sm-8 main-content">
            <?php if (isset($_SESSION)) { ?>
            <nav class="navbar navbar-toggleable-md navbarInline">
              <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                  <li class="nav-item active">
                    <a class="nav-link" href="/work/PiePHP/film">Salut <?= $_SESSION['firstname']; ?> !<span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Mon Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/work/PiePHP/user/profil/<?= $_SESSION['id_user']; ?>">Voir mon profil</a>
                      <a class="dropdown-item" href="#">Modifier mon profil</a>
                      <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                  </li>
                  <li class="nav-item">
                    <a class="nav-link" href="/work/PiePHP/user/logout">Déconnexion</a>
                  </li>
                </ul>
              </div>
            </nav>
            <?php } ?>

            <?= $view; ?>
          </div>
      </div>
  </div>
</body>

</html>
