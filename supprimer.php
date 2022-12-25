<?php

require_once("connexion.php");

if (isset($_GET['id'])) {
    $id=$_GET['id'];
    $req=$conn->prepare("DELETE FROM produit WHERE id=?");
    $req->execute(array($id));
    if ($req) {
        // echo "Suppression du produit effectué avec suucce";
        header("location:afficher.php");
    }
}


?>