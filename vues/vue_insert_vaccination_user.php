<h4> Insertion d'une vaccination</h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="hidden" placeholder="Description" name="description"
        value="<?php if($laVaccination!=null){ echo $laVaccination["description"];} ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="date" name="datevac"
        value="<?php if($laVaccination!=null){ echo $laVaccination['datevac'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="time" placeholder="Heure" name="heure"
        value="<?php if($laVaccination!=null){ echo $laVaccination['heure'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="hidden" placeholder="Nombre de doses" name="nbdose"
        value="0">
      </td>
    </tr>
    <tr>
      <td>
        <input type="hidden" placeholder="Température corporelle" name="temperature"
        value="A rentrer">
      </td>
    </tr>
    <tr>
      <td>
        <input type="hidden" placeholder="Nom du médecin" name="nommedecin"
        value="A rentrer">
      </td>
    </tr>
    <tr>
      <td>
        <select name="idcentre">
          <?php
            foreach($lesCentres as $unCentre){
              echo "<option value='".$unCentre['idcentre']."'>";
              echo $unCentre['idcentre']. "--" .$unCentre['type']."  ".$unCentre['horaire'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <select name="idpersonne">
          <?php
            foreach($lesPersonnes as $unePersonne){
              echo "<option value='".$unePersonne['idpersonne']."'>";
              echo $unePersonne['idpersonne']. "--" .$unePersonne['nom']."  ".$unePersonne['prenom'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <tr>
      <td>
        <select name="idvaccin">
          <?php
            foreach($lesVaccins as $unVaccin){
              echo "<option value='".$unVaccin['idvaccin']."'>";
              echo $unVaccin['idvaccin']. "--" .$unVaccin['nom']."  ".$unVaccin['laboratoire'];
              echo "</option>";
            }
          ?>
        </select>
      </td>
    </tr>
    <?php
      if ($laVaccination != null) echo "<input type='hidden' name='idvaccination' value = '".$laVaccination['idvaccination']."' >";
    ?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($laVaccination!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
