<!DOCTYPE html>
<htm lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>PHP Ajouter, Modifier, Supprimer</title>
    </head>

    <body>

        <form action="" method="post">
            <label for="">Nom de produit</label> <input type="text" name="nom" autocomplete="off"><br>
            <label for="">Prix du produits </label><input type="text" name="prix" autocomplete="off"><br>
            <label for="">Quantite </label><input type="text" type="number" min="1" name="quantite"
                autocomplete="off"><br>
            <button type="submit" name="enregistrer">Enregistrer</button>
        </form>

    </body>

</htm>


<?php  require_once("connexion.php");

if (isset($_POST['enregistrer'])) {
    $nom=$_POST['nom'];
    $prix=$_POST['prix'];
    $quantite=$_POST['quantite'];

    if (!empty($nom) AND !empty($prix) AND !empty($quantite) ) {
        if (strlen($nom) < 5) {
            echo "le nom du produit doit contenir au moin 5 caracteres";
        }
        else {
            $req=$conn->prepare("INSERT INTO produit(nomproduit,prix,quantite) VALUES (?,?,?)");
            $req->execute(array($nom,$prix,$quantite));
            if ($req) {
                // echo "Enregistrement effectues avec succées";
                header("location:afficher.php");
            }
        }
        
    }
else {
    echo "veuillez remplir tous les champs";
}
    
}

?>