<body>
  <html>
    <h3>Accueil du site</h3>
    </br>
    <h4>
      <?php
        if($_SESSION['role']=="sante"){

          echo "Bienvenue Docteur " .$_SESSION['nom']."   " .$_SESSION['prenom'];
        }
        else{
          echo "Bienvenue " .$_SESSION['nom']."   " .$_SESSION['prenom'];
        }
      ?>
    </h4>
    <br>
    <br>
    <img src="images/logo.jpg" height="150" width="300">
    </br>
    <p>
      <div class="desc">
      <b>Ce site regroupe les informations concernants les vaccinations de la Covid-19
      </br>
      Venez nous voir, nous serons ravis de vous accueillir et de vous vacciner dans nos nombreux centres !.</b>
      </div>
    </p>
    </br>
    </br>
      <img src="images/centre_vacc.png" height="600" width="1000">
    </br>
  </html>
</body>
