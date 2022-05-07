<br><h3>Gestion des vaccinations</h3>

<?php
  $lesPersonnes = selectAllPersonnes();
  $lesCentres = selectAllCentres();
  $lesVaccins = selectAllVaccins();
  $laVaccination=null;
  if(isset($_GET['action']) && isset($_GET['idvaccination'])){
    $action= $_GET['action'];
    $idvaccination= $_GET['idvaccination'];
    switch($action){
      case 'sup':
        deleteVaccination($idvaccination);
        break;
      case 'edit':
        $laVaccination = selectWhereVaccination($idvaccination);
          //var_dump($laVaccination);
        break;
    }
  }
  require_once("vues/vue_insert_vaccination.php");
  if (isset($_POST['Modifier'])){
    updateVaccination($_POST);
    //On recharge la page
    header("Location: index.php?page=4");
  }
  if (isset($_POST['Valider'])){
    insertVaccination($_POST);
  }

  if (isset($_POST['Rechercher'])){
    $mot= $_POST['mot'];
    $lesVaccinations = searchVaccinations($mot);
  }
  else{
    $lesVaccinations = selectAllVaccinations();
  }
require_once("vues/vue_les_vaccinations.php");
?>
