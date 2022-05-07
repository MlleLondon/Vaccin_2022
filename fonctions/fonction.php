<?php
/*******Se connecter à la bdd */
  function connexion(){
    $con=mysqli_connect("localhost", "root","","vaccin_2022");
    if($con==null){
      echo "Erreur de connexion à la bdd";
    }
    return $con;
  }

  function deconnexion($con){
    mysqli_close($con);
  }
/********* Fonctions Personnes ***/
  function selectAllPersonnes(){
    $requete ="select * from personne;";
    $con=connexion();
    if($con){
      $lesPersonnes = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesPersonnes;
  }
        /**** Ajouter une personne avec le formulaire***/
  function insertPersonne($tab){
    $requete ="insert into personne values(null,'".$tab['nom']."', '".$tab['prenom']."' ,
                '".$tab['tel']."' ,'".$tab['adresse']."','".$tab['email']."', '".$tab['mdp']."', '".$tab['age']."','".$tab['numerosecu']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /**** Supprimer une Personne de la bdd***/
  function deletePersonne($idpersonne){
    $requete ="delete from personne where idpersonne = ".$idpersonne;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /* Récuperer une personne*/ //Pour la modifier avec la fonction ci-dessous
  function selectWherePersonne($idpersonne){
    $requete ="select * from personne where idpersonne =".$idpersonne ;
    $con=connexion();
    if($con){
      $lesPersonnes = mysqli_query($con, $requete);
      $unePersonne = mysqli_fetch_assoc($lesPersonnes);  //Recuperer une personne sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unePersonne;
  }
      /***Modifier une personne ***/
  function updatePersonne($tab){
    $requete ="update personne set nom = '".$tab['nom']."', prenom = '".$tab['prenom']."' , tel = '".$tab['tel']."'
              , adresse = '".$tab['adresse']."', email ='".$tab['email']."', mdp ='".$tab['mdp']."', age ='".$tab['age']."'
              , numerosecu ='".$tab['numerosecu']."' where idpersonne =" .$tab['idpersonne'];
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /***Chercher une Personne ***/
  function searchPersonnes($mot){
    $requete ="select * from personne where nom like '%".$mot."%' or prenom like '%".$mot."%' or tel like '%".$mot."%' or adresse like '%".$mot."%' or email like '%".$mot."%' or age like '%".$mot."%' or numerosecu like '%".$mot."%' ;";
    $con=connexion();
    if($con){
      $lesPersonnes = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesPersonnes;
  }
            /*Visualisation de vaccination liée à la personne*/
  function selectVaccinationsPersonnes($idpersonne){
    $requete ="select * from vaccination where idpersonne =".$idpersonne;
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccinations;
  }



  /********* Fonctions Centres ***/
  function selectAllCentres(){
    $requete ="select * from centre;";
    $con=connexion();
    if($con){
      $lesCentres = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesCentres;
  }
        /**** Ajouter un Centre avec le formulaire***/
  function insertCentre($tab){
    $requete ="insert into centre values(null,'".$tab['nom']."', '".$tab['adresse']."' ,
                '".$tab['type']."' ,'".$tab['capacite']."','".$tab['nbintervenant']."', '".$tab['horaire']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /**** Supprimer un Centre de la bdd***/
  function deleteCentre($idcentre){
    $requete ="delete from centre where idcentre = ".$idcentre;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /*Récuperer un client*/ //Pour ensuite le modifier avec la fonction ci-dessous
  function selectWhereCentre($idcentre){
    $requete ="select * from centre where idcentre =".$idcentre ;
    $con=connexion();
    if($con){
      $lesCentres = mysqli_query($con, $requete);
      $unCentre = mysqli_fetch_assoc($lesCentres);  //Recuperer un centre sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unCentre;
  }
      /***Modifier un centre ***/
  function updateCentre($tab){
    $requete ="update centre set nom = '".$tab['nom']."', adresse = '".$tab['adresse']."' , type = '".$tab['type']."'
              , capacite = '".$tab['capacite']."', nbintervenant = '".$tab['nbintervenant']."',  horaire = '".$tab['horaire']."' where idcentre =" .$tab['idcentre'];
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /***Chercher un centre ***/
  function searchCentres($mot){
    $requete ="select * from centre where nom like '%".$mot."%' or adresse like '%".$mot."%' or type like '%".$mot."%' or capacite like '%".$mot."%' or nbintervenant like '%".$mot."%' or horaire like '%".$mot."%' ;";
    $con=connexion();
    if($con){
      $lesCentres = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesCentres;
  }
                /*Visualiser vaccinations liées à Centre*/
  function selectVaccinationsCentres($idcentre){
    $requete ="select * from vaccination where idcentre =".$idcentre;
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccinations;
  }



  /********* Fonctions Vaccins ***/
  function selectAllVaccins(){
    $requete ="select * from vaccin;";
    $con=connexion();
    if($con){
      $lesVaccins = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccins;
  }
        /**** Ajouter un vaccin avec le formulaire***/
  function insertVaccin($tab){
    $requete ="insert into vaccin values(null,'".$tab['nom']."', '".$tab['laboratoire']."' ,
                '".$tab['pays']."' ,'".$tab['conservation']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /**** Supprimer un vaccin de la bdd***/
  function deleteVaccin($idvaccin){
    $requete ="delete from vaccin where idvaccin = ".$idvaccin;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
            /*Récuperer un vaccin*/ //Pour ensuite pouvoir le modifier
  function selectWhereVaccin($idvaccin){
    $requete ="select * from vaccin where idvaccin =".$idvaccin ;
    $con=connexion();
    if($con){
      $lesVaccins = mysqli_query($con, $requete);
      $unVaccin = mysqli_fetch_assoc($lesVaccins);  //Recuperer un vaccin sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unVaccin;
  }
      /***Modifier un vaccin ***/
  function updateVaccin($tab){
    $requete ="update vaccin set nom = '".$tab['nom']."', laboratoire = '".$tab['laboratoire']."' , pays = '".$tab['pays']."'
              , conservation = '".$tab['conservation']."' where idvaccin =" .$tab['idvaccin'];
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /***Chercher un vaccin ***/
  function searchVaccins($mot){
    $requete ="select * from vaccin where nom like '%".$mot."%' or laboratoire like '%".$mot."%' or pays like '%".$mot."%' or conservation like '%".$mot."%';";
    $con=connexion();
    if($con){
      $lesVaccins = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccins;
  }
              /*Visualiser les vaccinations liées au Vaccin*/
  function selectVaccinationsVaccins($idvaccin){
    $requete ="select * from vaccination where idvaccin =".$idvaccin;
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccinations;
  }


  /**** Fonction Vaccinations***/
  function selectAllVaccinations(){
    $requete ="select * from vaccination;";
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccinations;
  }
        /**** Ajouter une Vaccination avec le formulaire***/
  function insertVaccination($tab){
    $requete ="insert into vaccination values(null,'".$tab['description']."', '".$tab['datevac']."', '".$tab['heure']."', '".$tab['nbdose']."', '".$tab['temperature']."', '".$tab['nommedecin']."', '".$tab['idcentre']."'
                , '".$tab['idpersonne']."', '".$tab['idvaccin']."');";
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
      /**** Supprimer une Vaccination de la bdd***/
  function deleteVaccination($idvaccination){
    $requete ="delete from vaccination where idvaccination = ".$idvaccination;
    $con=connexion();
    if($con){
      mysqli_query($con, $requete);
    }
    deconnexion($con);
  }
          /*Récuperer une vaccination*/ //Pour pouvoir la modifier
  function selectWhereVaccination($idvaccination){
    $requete ="select * from vaccination where idvaccination =".$idvaccination ;
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
      $uneVaccination = mysqli_fetch_assoc($lesVaccinations);  //Recuperer une vaccination sous forme de tableau associatif
    }
    else{
      return null;
    }
    deconnexion($con);
    return $uneVaccination;
  }
  /***Modifier une vaccination ***/
  function updateVaccination($tab){
  $requete ="update vaccination set description = '".$tab['description']."', datevac = '".$tab['datevac']."' , heure = '".$tab['heure']."'
            , nbdose = '".$tab['nbdose']."', temperature ='".$tab['temperature']."', nommedecin ='".$tab['nommedecin']."'
            , idcentre ='".$tab['idcentre']."', idpersonne ='".$tab['idpersonne']."', idvaccin ='".$tab['idvaccin']."'
            where idvaccination =" .$tab['idvaccination'];
  $con=connexion();
  if($con){
    mysqli_query($con, $requete);
  }
  deconnexion($con);
  }
/***Chercher une vaccination ***/
  function searchVaccinations($mot){
    $requete ="select * from vaccination where description like '%".$mot."%' or datevac like '%".$mot."%' or heure like '%".$mot."%'
                or nbdose like '%".$mot."%' or temperature like '%".$mot."%' or nommedecin like '%".$mot."%' or idcentre like '%".$mot."%'
                 or idpersonne like '%".$mot."%' or idvaccin like '%".$mot."%';";
    $con=connexion();
    if($con){
      $lesVaccinations = mysqli_query($con, $requete);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $lesVaccinations;
  }


  /*********** Fonction User ************/
  function selectUser($email, $mdp){
    $requete = "select * from user where email='" .$email."' and mdp='".$mdp."';";
    $con=connexion();
    if($con){
      $resultat = mysqli_query($con, $requete);
      $unUser=mysqli_fetch_assoc($resultat);
    }
    else{
      return null;
    }
    deconnexion($con);
    return $unUser;
  }
  ?>
