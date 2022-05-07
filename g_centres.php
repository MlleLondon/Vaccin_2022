<br><h3>Gestion des centres de vaccination</h3>

<?php
  $leCentre=null;
  $lesVaccinations=null;
    if(isset($_GET['action']) && isset($_GET['idcentre'])){
      $action= $_GET['action'];
      $idcentre= $_GET['idcentre'];
        switch($action){
          case 'sup':
            deleteCentre($idcentre);
            break;
          case 'edit':
            $leCentre = selectWhereCentre($idcentre);
                  //var_dump($leCentre);
            break;
          case 'vaccination':
            $lesVaccinations = selectVaccinationsCentres($idcentre);
            break;
        }
      }

      require_once("vues/vue_insert_centre.php");
      if (isset($_POST['Modifier'])){
        updateCentre($_POST);
        //On recharge la page
        header("Location: index.php?page=2");
      }
      if (isset($_POST['Valider'])){
        insertCentre($_POST);
      }

  if (isset($_POST['Rechercher'])){
    $mot= $_POST['mot'];
    $lesCentres = searchCentres($mot);
  }
  else{
    $lesCentres = selectAllCentres();
  }
  require_once("vues/vue_les_centres.php");
  echo "</br> </br>";
  if($lesVaccinations!=null){
    echo "<h2> Liste des vaccinations</h2>";
    require_once("vues/vue_les_vaccinations_centres.php");
  }
?>
