<?php

require_once("connexion.php");

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $req=$conn->query("SELECT * FROM produit WHERE id=$id");
    $mod=$req->fetch();
    
    
}

?>
<h2>Modification du produit</h2>

<form action="" method="post">
    <label for="">Nom de produit</label> <input value="<?php echo $mod['nomproduit'] ?>" type="text" name="nom"
        autocomplete="off"><br>
    <label for="">Prix du produits </label><input value="<?php echo $mod['prix'] ?>" type="text" name="prix"
        autocomplete="off"><br>
    <label for="">Quantite </label><input value="<?php echo $mod['quantite'] ?>" type="text" type="number" min="1"
        name="quantite" autocomplete="off"><br>
    <button type="submit" name="Modifier">Enregistrer les modifictaions</button>
</form>


<?php
  if (isset($_POST['Modifier']))
   {
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];
    $req=$conn->prepare("UPDATE produit SET nomproduit=? , prix = ?, quantite= ?  WHERE id=$id");
    $req->execute(array($nom,$prix,$quantite));

    if ($req) {
        header("location:afficher.php");
    }
  }

  
  

?>