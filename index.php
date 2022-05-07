<?php
  session_start(); //Démarrage de la session
  require_once("fonctions/fonction.php");
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css" media="all">
    <title>Site Projet Vaccin</title>
</head>
<body>
  <center>

    <?php
    if(!isset($_SESSION['email'])){ //S'il n'y a pas de session affichage de la connexion
      echo '<header>
          <nav>
              <label class="logo">Vaccin 2022</label>
              <ul>
              </ul>
              </label>
          </nav>
      </header>';
      require_once("vues/vue_connexion.php");
    }
    if(isset($_POST['Se_connecter'])){
      $email= $_POST['email'];
      $mdp= $_POST['mdp'];
      $unUser = selectUser($email, $mdp);
          //var_dump($unUser);
      if ($unUser ==null){
        echo "Veuillez vérifier vos identifiants !";
      }
      else{ //Si connexion alors tout s'affiche
        echo "Bienvenue ".$unUser['nom']." ".$unUser['prenom'];
        echo "</br>";
        echo "</br>";

        //Création de la session user
        $_SESSION['email'] = $unUser['email'];
        $_SESSION['nom'] = $unUser['nom'];
        $_SESSION['prenom'] = $unUser['prenom'];
        $_SESSION['role'] = $unUser['role'];
        //On recharge la page vers le home
        header("Location: index.php?page=0");
      }
    }
    if(isset($_SESSION['email'])){
      if($_SESSION['role']=="sante"){
        echo '
          <header>
            <nav>
              <label class="logo">Vaccin 2022</label>
                <ul>
                  <li><a href="index.php?page=0">Accueil</a></li>
                  <li><a href="index.php?page=1">Personnes</a></li>
                  <li><a href="index.php?page=2">Centres</a></li>
                  <li><a href="index.php?page=3">Vaccins</a></li>
                  <li><a href="index.php?page=4">Vaccinations</a></li>
                  <li><a href="index.php?page=5">Deconnexion</a></li>
                </ul>
              </label>
            </nav>
          </header>';
      }
      else{
        echo '
          <header>
            <nav>
              <label class="logo">Vaccin 2022</label>
                <ul>
                  <li><a href="index.php?page=0">Accueil</a></li>
                  <li><a href="index.php?page=1">Personnes</a></li>
                  <li><a href="index.php?page=2">Centres</a></li>
                  <li><a href="index.php?page=3">Vaccins</a></li>
                  <li><a href="index.php?page=6">Vaccinations</a></li>
                  <li><a href="index.php?page=5">Deconnexion</a></li>
                </ul>
              </label>
            </nav>
          </header>';
      }
        if(isset($_GET["page"]))
    				{
    					$page = $_GET["page"];
    				}
        else{
    			$page=0 ;
    		}
    		switch ($page){
    			case 0 : require_once ("home.php");
    			break;
    			case 1 : require_once ("g_personnes.php");
    			break;
    			case 2 : require_once ("g_centres.php");
    			break;
    			case 3 : require_once ("g_vaccins.php");
    			break;
    			case 4 : require_once ("g_vaccinations.php");
    			break;
    			case 5 :
            // Deconnexion : suppression de la session
            session_destroy();
            header("Location: index.php"); //Recharger la page
    			break;
          case 6 : require_once ("g_vaccinations_user.php");
    			break;
    		}
      }
    ?>
    <!--Début du pied de page -->
    <div class="footer-dark">
        <footer>
            <div class="cont">
                <div class="row">
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Nos services</h3>
                        <ul>
                            <li><a href="https://www.sante.fr/">Santé</a></li>
                            <li><a href="https://www.gouvernement.fr/info-coronavirus">Covid-19</a></li>
                        </ul>
                    </div>
                    <div class="col-sm-6 col-md-3 item">
                        <h3>Disposition</h3>
                        <ul>
                            <li><a href="https://www.futura-sciences.com/sante/definitions/vaccin-vaccinodrome-19286/">Centres</a></li>
                            <li><a href="https://www.larousse.fr/dictionnaires/francais/vaccin/80859">Vaccins</a></li>
                            <li><a href="https://www.larousse.fr/dictionnaires/francais/vaccination/80863">Vaccinations</a></li>
                        </ul>
                    </div>
                    <div class="col-md-6 item text">
                        <h3>A propos</h3>
                        <p>Site prévu pour être mis à jour sur les vaccinations, centres et vaccins disponibles pour la population en temps réel</p>
                    </div>
                </div>
                <p class="copyright">Centre Vaccination © 2022</p>
            </div>
        </footer>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/js/bootstrap.bundle.min.js"></script>
    <!--Fin du pied de page -->
  </center>
  </body>
  <style>

body{
  background-color: rgb(224,240,227);
}
  /* Début footer */
  .footer-dark {
padding:50px 0;
color:#f0f9ff;
background-color:#282d32;
}

.footer-dark h3 {
margin-top:0;
margin-bottom:12px;
font-weight:bold;
font-size:16px;
}

.footer-dark ul {
padding:0;
list-style:none;
line-height:1.6;
font-size:14px;
margin-bottom:0;
}

.footer-dark ul a {
color:inherit;
text-decoration:none;
opacity:0.6;
}

.footer-dark ul a:hover {
opacity:0.8;
}

@media (max-width:767px) {
.footer-dark .item:not(.social) {
  text-align:center;
  padding-bottom:20px;
}
}

.footer-dark .item.text {
margin-bottom:36px;
}

@media (max-width:767px) {
.footer-dark .item.text {
  margin-bottom:0;
}
}

.footer-dark .item.text p {
opacity:0.6;
margin-bottom:0;
}

.footer-dark .item.social {
text-align:center;
}

@media (max-width:991px) {
.footer-dark .item.social {
  text-align:center;
  margin-top:20px;
}
}

.footer-dark .item.social > a {
font-size:20px;
width:36px;
height:36px;
line-height:36px;
display:inline-block;
text-align:center;
border-radius:50%;
box-shadow:0 0 0 1px rgba(255,255,255,0.4);
margin:0 8px;
color:#fff;
opacity:0.75;
}

.footer-dark .item.social > a:hover {
opacity:0.9;
}

.footer-dark .copyright {
text-align:center;
padding-top:24px;
opacity:0.3;
font-size:13px;
margin-bottom:0;
}

https://epicbootstrap.com/snippets/footer-dark
  /* Fin footer */
  </style>
</html>
