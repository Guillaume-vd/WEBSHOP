<?php
require_once('AccueilController.php');
?>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html"; charset="utf-8"/>
    <link href="Content\css\bootstrap.css" rel="stylesheet" />
    <link href="Content\css\design.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ISIWEB4SHOP</title>
  </head>
  <body>
      <div class="navbar navbar-inverse navbar-fixed-top">
          <div class="container">
              <div class="navbar-header">
                  <a class='navbar-brand'href="accueil.php"> ISIWEB4Shop </a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                  <li><p class="navbar-text"> <span class="glyphicon glyphicon-user"> </span> <a href="Inscription.Controller.php"> S'inscrire </a> </p></li>
                  <li><p class="navbar-text"> <span class="glyphicon glyphicon-log-in"> </span> <a href="Connexion.Controller.php"> Se connecter </a> </p></li>
                  <li><p class="navbar-text"> <span class="glyphicon glyphicon-shopping-cart"> </span> <a href="cart.php"> Panier </a></p></li> <!--Metttre le nombre d'article en badge pour le panier-->
              </ul>
          </div>
      </div>
      <nav class="vertical-menu">
          <a class="Accueil active" href="accueil.php">Accueil</a></li>
          <?php
              foreach ($cat as $value) {
                echo "<a href='produits.php?cat=$value'>Nos $value</a></li>";
              }
           ?>
      </nav>
      <div class="container body-content">
          <!-- LIENS PAGE FILLE -->
          <hr />
          <footer>
              <p><!--Date aujd --> - ISIWEB4Shop</p>
          </footer>
      </div>
  </body>
</html>
