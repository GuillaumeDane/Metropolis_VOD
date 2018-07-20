<!DOCTYPE html>
<html lang="fr" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/css/materialize.min.css">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
  <link rel="stylesheet" href="css/film_galery.css">
  <title>Film</title>
</head>

<body>

  <!-- HEADER -->

  <header>

  </header>
  <nav>
    <div class="nav-wrapper grey darken-4">
      <a href="#" class="brand-logo"><img id="logo" src="img/logo.png"></a>
      <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      <ul class="right hide-on-med-and-down">
        <li><a href="#"><i class="material-icons left">local_movies</i>Film</a></li>
        <li><a href="#"><i class="material-icons left">arrow_upward</i>Top 3</a></li>
        <li><a href="#"><i class="material-icons left">star_border</i>Favorie</a></li>
      </ul>
    </div>
    <ul class="sidenav" id="mobile-demo">
      <li><a href="#"><i class="material-icons left">local_movies</i>Film</a></li>
      <li><a href="#"><i class="material-icons left">arrow_upward</i>Top 3</a></li>
      <li><a href="#"><i class="material-icons left">star_border</i>Favorie</a></li>
      <li><a href="#"><i class="material-icons left">expand_more</i>Style</a>
      </li>
    </ul>
  </nav>

  <!-- MAIN -->

  <main>

    <h2 class="center align top grey darken-3 white-text">Top 3</h2>

    <div class="center align row top_3 grey darken-3">
      <a><img id="Avatar" class="img_max" src="img/cover_avatar.jpg"></a>
      <a><img id="#" class="img_max" src="img/cover_avatar.jpg"></a>
      <a><img id="#" class="img_max" src="img/cover_avatar.jpg"></a>
    </div>

    <div id="film_focus_Avatar" class="row top_3 grey darken-4">
      <div class="col s3">
        <img class="img_max_more" src="img/cover_avatar.jpg">
      </div>
      <div class="col s1">
      </div>
      <div class="description left align col s8 white-text">
        <h3 class="center-align">Avatar 2</h3>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute
          irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <div class="center align img_actors">
          <h4>Acteurs :</h4>
          <img class="actors" src="img/Sigourney_Weaver_Avatar.jpg">
          <img class="actors" src="img/Zoe_Saldana_Avatar.jpg">
          <img class="actors" src="img/Sam_Worthington_Avatar.jpg">
        </div>
        <div class="center align regarder">
          <a class="regarder waves-effect waves-light btn-large">REGARDER</a>
        </div>
      </div>
    </div>

    <div class="row main">
      <div class="navigation_style col s2 grey darken-2">
        <h2 class="white-text">Tag :</h2>
        <ul>
          <li><a href="#">Action</a></li>
          <li><a href="#">Aventure</a></li>
          <li><a href="#">Horeur</a></li>
          <li><a href="#">Documentaire</a></li>
          <li><a href="#">Marvel</a></li>
          <li><a href="#">DC</a></li>
          <li><a href="#">Excu MetroVOD</a></li>
        </ul>
      </div>
    </div>
  </main>

  <!-- FOOTER -->

  <footer class="page-footer grey darken-4">
    <div class="container">
      <div class="row">
        <div class="col l6 s12">
          <h5 class="white-text">
							Contact :
						</h5>
          <p class="grey-text text-lighten-4">
            Lorem m veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt
            in culpa qui officia deserunt mollit anim id est laborum.
          </p>
        </div>
        <div class="col l4 offset-l2 s12">
          <h5 class="white-text">Nous suivre :</h5>
          <ul>
            <li>
              <a class="grey-text text-lighten-3" href="#"><i class="fab fa-facebook-square"></i> http/facebook.com</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#"><i class="fab fa-twitter"></i> http/twitter.com</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#"><i class="fab fa-youtube"></i> http/youtube.com</a>
            </li>
            <li>
              <a class="grey-text text-lighten-3" href="#"><i class="fab fa-instagram"></i> http/insta.com</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="footer-copyright">
      <div class="container">
        © 2018 Copyright Text
      </div>
    </div>
  </footer>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0-rc.2/js/materialize.min.js"></script>
  <script type="text/javascript" src="js/script.js"></script>
</body>

</html>
