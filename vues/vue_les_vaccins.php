
<h4> Liste des vaccins </h4>

<form method="post" action="">
  <input type="text" placeholder="Rechercher" name= "mot" value="">
  <input type="submit" name= "Rechercher" value="Rechercher">
</form>



<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
        <tr>
            <td><b>Id Vaccin</b></td>
            <td><b>Nom Vaccin</b></td>
            <td><b>Laboratoire</b></td>
            <td><b>Pays</b></td>
            <td><b>Conservation</b></td>
            <?php
              if($_SESSION['role']=="sante"){
                echo '
                <td><b>Opérations </b></td>';
              }
            ?>
            <td><b>Vaccinations</b></td>
        </tr>
      </thead>

  <?php
    foreach($lesVaccins as $unVaccin){
      echo "<tr>";
      echo "<td>".$unVaccin['idvaccin']."</td>";
      echo "<td>".$unVaccin['nom']."</td>";
      echo "<td>".$unVaccin['laboratoire']."</td>";
      echo "<td>".$unVaccin['pays']."</td>";
      echo "<td>".$unVaccin['conservation']."</td>";
      if($_SESSION['role']=="sante"){
        echo '<td>';
        //Icones supprimer et modifier
        echo "<a href='index.php?page=3&action=sup&idvaccin=".$unVaccin['idvaccin']."'>";
        echo "<img src='images/sup.jpg' height='30' width='30'>";
        echo "</a>";
        echo "<a href='index.php?page=3&action=edit&idvaccin=".$unVaccin['idvaccin']."'>";
        echo "<img src='images/edit.png' height='30' width='30'>";
        echo "</a>";
        echo "</td>";
        }
      //Icone visualisation vaccination
      echo "<td>";
      echo "<a href='index.php?page=3&action=vaccination&idvaccin=".$unVaccin['idvaccin']."'>";
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
