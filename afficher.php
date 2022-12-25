<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
table {
    border: 2px solid black;
}

td,
th {
    border: 1px solid black;
    border-collapse: collapse;
}
</style>


<body>

    <h4>Liste de tout les produit</h4>

    <table>
        <th>ID</th>
        <th>Nom de produit</th>
        <th>Prix du produit</th>
        <th>Quantite</th>
        <th>Action</th>

        <?php
        require_once('connexion.php');
        $req=$conn->query("SELECT * FROM produit");
        while ($aff=$req->fetch()) {
        ?>

        <tr>
            <td><?php echo $aff['id']; ?> </td>
            <td><?php echo $aff['nomproduit']; ?> </td>
            <td><?php echo $aff['prix']; ?> </td>
            <td><?php echo $aff['quantite']; ?> </td>
            <td>
                <a href="modifier.php?id=<?php echo $aff['id'] ?>">Modifier</a>
                <a href="supprimer.php?id=<?php echo $aff['id'] ?>">Supprimer</a>
            </td>
        </tr>
        <?php
        }
        ?>


    </table>
</body>

</html>