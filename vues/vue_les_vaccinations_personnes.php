

<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
<div class="container">

  <table class="table">
    <thead>
      <tr>
        <td><b>Id Vaccination</b></td>
        <td><b>Description</b></td>
        <td><b>Date</b></td>
        <td><b>Heure</b></td>
        <td><b>Nombre de dose</b></td>
      </tr>
    </thead>

  <?php
    foreach($lesVaccinations as $uneVaccination){
      echo "<tr>";
      echo "<td>".$uneVaccination['idvaccination']."</td>";
      echo "<td>".$uneVaccination['description']."</td>";
      echo "<td>".$uneVaccination['datevac']."</td>";
      echo "<td>".$uneVaccination['heure']."</td>";
      echo "<td>".$uneVaccination['nbdose']."</td>";
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
