<h4> Insertion d'un centre de vaccination </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Nom" name="nom"
        value="<?php if($leCentre!=null){ echo $leCentre['nom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Adresse" name="adresse"
        value="<?php if($leCentre!=null){ echo $leCentre['adresse'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Type" name="type"
        value="<?php if($leCentre!=null){ echo $leCentre['type'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Capacité" name="capacite"
        value="<?php if($leCentre!=null){ echo $leCentre['capacite'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Nombre d'intervenant" name="nbintervenant"
        value="<?php if($leCentre!=null){ echo $leCentre['nbintervenant'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Horaire" name="horaire"
        value="<?php if($leCentre!=null){ echo $leCentre['horaire'];}  ?>">
      </td>
    </tr>
<?php
  if($leCentre != null){
    echo "<input type='hidden' name='idcentre' value = '".$leCentre['idcentre']."'>";
  }
?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($leCentre!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
