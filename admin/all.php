<?php
ob_start();
require_once "../classes/CRUD_Produit.php";
$crud = new CRUD_Produit();
// NE9ES
$connexion = new connexion();
$pdo = $connexion->getConnexion();
$sql = "SELECT * FROM `produit`";
$res = $pdo->query($sql); //PDO Statement
$LesProduits = $res->fetchAll(PDO::FETCH_NUM);
//echo "<pre>";
//var_dump($LesProduits);
//echo "</pre>";
?>
<table class="table">
    <tr>
        <th>Identifiant</th>
        <th>Libellé</th>
        <th>Prix en DT</th>
        <th>Quantité</th>
        <th colspan="3">Actions</th>
    </tr>
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <tr>
            <td><?= $produit[0] ?></td>
            <td><?= $produit[1] ?></td>
            <td><?= $produit[2] ?></td>
            <td><?= $produit[3] ?></td>
            <td><a href="detail.php?id=<?= $produit[0] ?>" class="btn btn-info btn-sm">Voir détails</a></td>
            <td><a href="delete.php?id=<?= $produit[0] ?>" class="btn btn-danger btn-sm">Supprimer</a></td>
            <td><a href="update.php?id=<?= $produit[0] ?>" class="btn btn-dark btn-sm">Editer</a></td>
        </tr>
    <?php
    }
    ?>
</table>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>