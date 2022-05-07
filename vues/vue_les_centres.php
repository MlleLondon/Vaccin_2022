<h4> Liste des centres de vaccination </h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
        <tr>
            <td><b>Id Centre</b></td>
            <td><b>Nom Centre</b></td>
            <td><b>Adresse</b></td>
            <td><b>Type</b></td>
            <td><b>Capacité</b></td>
            <td><b>Nombre d'intervenants</b></td>
            <td><b>Horaire</b></td>
            <?php
              if($_SESSION['role']=="sante"){
                echo '<td><b>Opérations </b></td>';
              }
            ?>
            <td><b>Vaccinations</b></td>
        </tr>
      </thead>

  <?php
    foreach($lesCentres as $unCentre){
      echo "<tr>";
      echo "<td>".$unCentre['idcentre']."</td>";
      echo "<td>".$unCentre['nom']."</td>";
      echo "<td>".$unCentre['adresse']."</td>";
      echo "<td>".$unCentre['type']."</td>";
      echo "<td>".$unCentre['capacite']."</td>";
      echo "<td>".$unCentre['nbintervenant']."</td>";
      echo "<td>".$unCentre['horaire']."</td>";
      if($_SESSION['role']=="sante"){
        echo '<td>';
        //Icones supprimer et modifier
        echo "<a href='index.php?page=2&action=sup&idcentre=".$unCentre['idcentre']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=2&action=edit&idcentre=".$unCentre['idcentre']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
        echo "</td>";
      }
      //Icone visualisation vaccination
      echo "<td>";
      echo "<a href='index.php?page=2&action=vaccination&idcentre=".$unCentre['idcentre']."'>";
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
