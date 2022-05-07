<h4> Insertion d'un vaccin </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Nom" name="nom"
        value="<?php if($leVaccin!=null){ echo $leVaccin['nom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Laboratoire" name="laboratoire"
        value="<?php if($leVaccin!=null){ echo $leVaccin['laboratoire'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Pays" name="pays"
        value="<?php if($leVaccin!=null){ echo $leVaccin['pays'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Conservation" name="conservation"
        value="<?php if($leVaccin!=null){ echo $leVaccin['conservation'];}  ?>">
      </td>
    </tr>
<?php
  if($leVaccin != null){
    echo "<input type='hidden' name='idvaccin' value = '".$leVaccin['idvaccin']."'>";
  }
?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($leVaccin!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
