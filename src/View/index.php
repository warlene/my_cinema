<!doctype html>
<html lang="en">
<head>
 <meta charset="UTF-8" />
 <meta name="viewport"
 content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0" />
 <meta http-equiv="X-UA-Compatible" content="ie=edge" />
 <link href="/work/PiePHP/webroot/css/reset.css" rel="stylesheet">
 <link href="/work/PiePHP/webroot/css/sidebar.css" rel="stylesheet">
 <link href="/work/PiePHP/webroot/css/style.css" rel="stylesheet">

 <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
 <!-- <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script> -->
 <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
 <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

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
                      <li>Accueil</li>
                      <!-- <li>film</li> -->
                      <li>
                        <a data-toggle="collapse" href="#collapseExample" role="button" aria-expanded="false" aria-controls="collapseExample">Film</a>
                        <div class="row">
                          <div class="col">
                            <div class="collapse" id="collapseExample">
                                <!-- <div class="card card-body"> -->
                                <a class="collapse-item" href="/work/PiePHP/film/add">Ajouter un film</a>
                                <a class="collapse-item" href="#">Modifier un film</a>
                                <a class="collapse-item" href="#">Supprimer un film</a>
                              <!-- </div> -->
                            </div>
                          </div>
                        </div>


                      </li>
                      <li>genre</li>
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
                    <a class="nav-link" href="/work/PiePHP/film">Accueil <span class="sr-only">(current)</span></a>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Films
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="/work/PiePHP/film/add">Ajouter un film</a>
                      <a class="dropdown-item" href="#">Modifier un film</a>
                      <a class="dropdown-item" href="#">Supprimer un film</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Genres
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Ajouter un genre</a>
                      <a class="dropdown-item" href="#">Modifier un genre</a>
                      <a class="dropdown-item" href="#">Supprimer un genre</a>
                    </div>
                  </li>
                  <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="http://example.com" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      Mon Profil
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                      <a class="dropdown-item" href="#">Voir mon profil</a>
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
