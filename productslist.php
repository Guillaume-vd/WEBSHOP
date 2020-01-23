<?php
require_once 'HomeController.php';
require_once 'ProductslistController.php';
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
                <?php
                if($connecte){
                  echo("<li><p class='navbar-text'> <span class='glyphicon glyphicon-user'></span> $nom </p></li>");
                  echo("<li><p class='navbar-text'> <span class='glyphicon glyphicon-log-in'> </span> <a href='login.php'>     Déconnexion </a> </p></li>");
                }
                else{
                  echo("<li><p class='navbar-text'> <span class='glyphicon glyphicon-user'> </span> <a href='signin.php'> S'inscrire </a> </p></li>");
                  echo("<li><p class='navbar-text'> <span class='glyphicon glyphicon-log-in'> </span> <a href='login.php'> Se connecter </a> </p></li>");
                }
                ?>
                  <li><p class="navbar-text"> <span class="glyphicon glyphicon-shopping-cart"> </span> <a href="cart.php"> Panier </a></p></li> <!--Metttre le nombre d'article en badge pour le panier-->

              </ul>
          </div>
      </div>
      <div class="columnleft">
        <nav class="vertical-menu">
            <a class="accueil" href="accueil.php">Accueil</a>
              <?php
                  foreach ($cat as $value) {
                    if($value==$category){
                      echo "<a class='active' href='productslist.php?category=$value'>Nos $value</a>";
                    }
                    else{
                      echo "<a href='productslist.php?category=$value'>Nos $value</a>";
                    }
                }
             ?>
           </ul>
        </nav>
      </div>
      <div class="container body-content column-right">
            <?php
              echo"<table><tr>";
              foreach ($products as $value) {
                $id=get_idprod($value);
                echo"<tr>";
                echo "<td class='tdprod'><a href='products.php?product=$value'>$value </td>";
                echo "<td class='tdprod'><img src='Content/productimages/$img_name' alt='$img_name'></a></td>";
                echo "<td class='tdprod'>Prix : $prix[$id] €</td>";
                echo "<td class='tdprod'> Description :<br/>";
                show_desc($value);
                echo "</td></tr>";
              }
              echo("</table>")
            ?>
            <hr />
            <footer>

            </footer>
      </div>
  </body>
</html>
