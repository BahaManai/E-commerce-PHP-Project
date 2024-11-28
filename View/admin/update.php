<?php
ob_start();
?>
<form action="../../Controller/admin/update.php?id=<?= $id ?>" method="post" class="form-control">
    <label for="libelle">Libellé :</label><input type="text" name="libelle" class="form-control" value="<?= $produit[1] ?>"><br>
    <label for="prix">Prix :</label><input type="text" name="prix" class="form-control" value="<?= $produit[2] ?>"><br>
    <label for="qtte">Quantité :</label><input type="text" name="qtte" class="form-control" value="<?= $produit[3] ?>"><br>
    <label for="description">Description :</label><textarea name="description" class="form-control"><?= $produit[4] ?></textarea><br>
    <label for="image">Image :</label><input type="text" name="image" class="form-control" value="<?= $produit[5] ?>"><br>
    <label for="promo">En promotion :</label><input type="text" value=0 name="promo" class="form-control" value="<?= $produit[6] ?>"><br>
    <input type="submit" value="Modifier" name="ok" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Modification d'un produit";
include "layout.php";
?>