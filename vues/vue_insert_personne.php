<h4> Insertion d'une personne </h4>
<form method="post" action="">
  <table border="0">
    <tr>
      <td>
        <input type="text" placeholder="Nom" name="nom"
        value="<?php if($laPersonne!=null){ echo $laPersonne['nom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Prénom" name="prenom"
        value="<?php if($laPersonne!=null){ echo $laPersonne['prenom'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Adresse" name="adresse"
        value="<?php if($laPersonne!=null){ echo $laPersonne['adresse'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Email" name="email"
        value="<?php if($laPersonne!=null){ echo $laPersonne['email'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Numéro de téléphone" name="tel"
        value="<?php if($laPersonne!=null){ echo $laPersonne['tel'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Âge" name="age"
        value="<?php if($laPersonne!=null){ echo $laPersonne['age'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="text" placeholder="Numéro de sécurité sociale" name="numerosecu"
        value="<?php if($laPersonne!=null){ echo $laPersonne['numerosecu'];}  ?>">
      </td>
    </tr>
    <tr>
      <td>
        <input type="password" placeholder="Mot de passe" name="mdp"
        value="<?php if($laPersonne!=null){ echo $laPersonne['mdp'];}  ?>">
      </td>
    </tr>
<?php
  if($laPersonne != null){
    echo "<input type='hidden' name='idpersonne' value = '".$laPersonne['idpersonne']."'>";
  }
?>
    <tr>
      <td>
        <input type="reset" name="Annuler" value="Annuler">
        <input type="submit" <?php
              if($laPersonne!=null){ echo 'name="Modifier" value="Modifier"'; }
              else{ echo 'name="Valider" value="Valider"';} ?>>
      </td>
    </tr>
  </table>
</form>
