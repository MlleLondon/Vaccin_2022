<br><h3>Gestion des vaccins</h3>

<?php
  $leVaccin=null;
  $lesVaccinations=null;
  if(isset($_GET['action']) && isset($_GET['idvaccin'])){
    $action= $_GET['action'];
    $idvaccin= $_GET['idvaccin'];
    switch($action){
      case 'sup':
        deleteVaccin($idvaccin);
        break;
      case 'edit':
        $leVaccin = selectWhereVaccin($idvaccin);
          //var_dump($leVaccin);
        break;
      case 'vaccination':
        $lesVaccinations = selectVaccinationsVaccins($idvaccin);
        break;
    }
  }
  require_once("vues/vue_insert_vaccin.php");
  if (isset($_POST['Modifier'])){
    updateVaccin($_POST);
    //On recharge la page
    header("Location: index.php?page=3");
  }
  if (isset($_POST['Valider'])){
    insertVaccin($_POST);
  }

  if (isset($_POST['Rechercher'])){
    $mot= $_POST['mot'];
    $lesVaccins = searchVaccins($mot);
  }
  else{
    $lesVaccins = selectAllVaccins();
  }
require_once("vues/vue_les_vaccins.php");
echo "</br> </br>";
if($lesVaccinations!=null){
  echo "<h2> Liste des vaccinations</h2>";
  require_once("vues/vue_les_vaccinations_vaccins.php");
}
?>
