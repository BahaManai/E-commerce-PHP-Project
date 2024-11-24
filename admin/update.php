<?php
ob_start();
require_once "../Classes/CRUD_Produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$produit = $crud->find($id);
?>
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">
    <label for="libelle">Libellé :</label><input type="text" name="libelle" class="form-control" value="<?= $produit[1] ?>"><br>
    <label for="prix">Prix :</label><input type="text" name="prix" class="form-control" value="<?= $produit[2] ?>"><br>
    <label for="qtte">Quantité :</label><input type="text" name="qtte" class="form-control" value="<?= $produit[3] ?>"><br>
    <label for="description">Description :</label><textarea name="description" class="form-control"><?= $produit[4] ?></textarea><br>
    <label for="image">Image :</label><input type="text" name="image" class="form-control" value="<?= $produit[5] ?>"><br>
    <label for="promo">En promotion :</label><input type="text" value=0 name="promo" class="form-control" value="<?= $produit[6] ?>"><br>
    <input type="submit" value="Modifier" name="ok" class="btn btn-success btn-lg">
</form>
<?php
if (isset($_POST['ok'])) {
    $libelle = htmlspecialchars($_POST['libelle']);
    $prix = htmlspecialchars($_POST['prix']);
    $qtte = htmlspecialchars($_POST['qtte']);
    $description = htmlspecialchars($_POST['description']);
    $image = htmlspecialchars($_POST['image']);
    $promo = htmlspecialchars($_POST['promo']);
    $res = $crud->update($id, $libelle, $prix, $qtte, $description, $image, $promo);
    if ($res) {
        header("location:all.php");
        exit;
    } else {
        echo "Problème de modification";
    }
}
$contenu = ob_get_clean();
$titre = "Modification d'un produit";
include "layout.php";
?>