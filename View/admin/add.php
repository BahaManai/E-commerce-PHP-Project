<?php
ob_start();
?>
<form action="../../Controller/admin/add.php" method="post" class="form-control">
    <label for="libelle">Libellé :</label><input type="text" name="libelle" class="form-control"><br>
    <label for="prix">Prix :</label><input type="text" name="prix" class="form-control"><br>
    <label for="qtte">Quantité :</label><input type="text" name="qtte" class="form-control"><br>
    <label for="description">Description :</label><textarea name="description" class="form-control"></textarea><br>
    <label for="image">Image :</label><input type="text" name="image" class="form-control"><br>
    <label for="promo">En promotion :</label><input type="text" value=0 name="promo" class="form-control"><br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-success btn-lg">
</form>
<?php
$contenu = ob_get_clean();
$titre = "Ajout d'un produit";
include "layout.php";
?>