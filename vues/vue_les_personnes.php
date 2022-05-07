
<h4> Liste des personnes </h4>
<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
        <tr>
            <td><b>Id Personne</b></td>
            <td><b>Nom Personne</b></td>
            <td><b>Prénom Personne</b></td>
            <td><b>Adresse</b></td>
            <td><b>Email</b></td>
            <td><b>Téléphone</b></td>
            <td><b>Âge</b></td>
            <?php
              if($_SESSION['role']=="sante"){
                echo '<td><b>Num sécu. sociale </b></td>';
                echo '<td><b>Opérations </b></td>';
              }
            ?>
            <td><b>Vaccinations</b></td>
        </tr>
      </thead>

  <?php
    foreach($lesPersonnes as $unePersonne){
      echo "<tr>";
      echo "<td>".$unePersonne['idpersonne']."</td>";
      echo "<td>".$unePersonne['nom']."</td>";
      echo "<td>".$unePersonne['prenom']."</td>";
      echo "<td>".$unePersonne['adresse']."</td>";
      echo "<td>".$unePersonne['email']."</td>";
      echo "<td>".$unePersonne['tel']."</td>";
      echo "<td>".$unePersonne['age']."</td>";
      if($_SESSION['role']=="sante"){
        echo "<td>".$unePersonne['numerosecu']."</td>";
        echo "<td>";
        //Icones supprimer et modifer
        echo "<a href='index.php?page=1&action=sup&idpersonne=".$unePersonne['idpersonne']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=1&action=edit&idpersonne=".$unePersonne['idpersonne']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
        echo "</td>";
      }
      //Icone visualisation vaccination
      echo "<td>";
      echo "<a href='index.php?page=1&action=vaccination&idpersonne=".$unePersonne['idpersonne']."'>";
      echo "<img src='images/vaccination.png' height='30' width='30'>";
      echo "</a>";
      echo "</td>";
      echo "</tr>";
    }
  ?>
  </table>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<style>
.container {
  background-color: #b9dbf0; /* Green */
  border: none;
  color: black;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
}
</style>
