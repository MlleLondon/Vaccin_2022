<br><h3>Gestion des personnes</h3>

<?php
  $laPersonne=null;
  $lesVaccinations=null;
  if(isset($_GET['action']) && isset($_GET['idpersonne'])){
    $action= $_GET['action'];
    $idpersonne= $_GET['idpersonne'];
    switch($action){
      case 'sup':
        deletePersonne($idpersonne);
        break;
      case 'edit':
        $laPersonne = selectWherePersonne($idpersonne);
          //var_dump($laPersonne);
        break;
      case 'vaccination':
        $lesVaccinations = selectVaccinationsPersonnes($idpersonne);
        break;
    }
  }
  require_once("vues/vue_insert_personne.php");
  if (isset($_POST['Modifier'])){
    updatePersonne($_POST);
    //On recharge la page
    header("Location: index.php?page=1");
  }
  if (isset($_POST['Valider'])){
    insertPersonne($_POST);
  }

  if (isset($_POST['Rechercher'])){
    $mot= $_POST['mot'];
    $lesPersonnes = searchPersonnes($mot);
  }
  else{
    $lesPersonnes = selectAllPersonnes();
  }
require_once("vues/vue_les_personnes.php");
echo "</br> </br>";
  if($lesVaccinations!=null){
    echo "<h2> Liste des vaccinations</h2>";
    require_once("vues/vue_les_vaccinations_personnes.php");
  }
?>
