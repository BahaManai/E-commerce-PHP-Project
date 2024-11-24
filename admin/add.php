<?php
ob_start();
?>
<!--$libelle, $prix, $qtte, $description, $image, $promo-->
<form action="<?= $_SERVER['PHP_SELF'] ?>" method="post" class="form-control">
    <label for="libelle">Libellé :</label><input type="text" name="libelle" class="form-control"><br>
    <label for="prix">Prix :</label><input type="text" name="prix" class="form-control"><br>
    <label for="qtte">Quantité :</label><input type="text" name="qtte" class="form-control"><br>
    <label for="description">Description :</label><textarea name="description" class="form-control"></textarea><br>
    <label for="image">Image :</label><input type="text" name="image" class="form-control"><br>
    <label for="promo">En promotion :</label><input type="text" value=0 name="promo" class="form-control"><br>
    <input type="submit" value="Ajouter" name="ok" class="btn btn-success btn-lg">
</form>
<?php
if (isset($_POST['ok'])) {
    require_once "../classes/CRUD_Produit.php";
    $libelle = htmlspecialchars($_POST['libelle']);
    $prix = htmlspecialchars($_POST['prix']);
    $qtte = htmlspecialchars($_POST['qtte']);
    $description = htmlspecialchars($_POST['description']);
    $image = htmlspecialchars($_POST['image']);
    $promo = htmlspecialchars($_POST['promo']);
    $produit = new produit(NULL, $libelle, $prix, $qtte, $description, $image, $promo);
    $crud = new CRUD_Produit();
    $res = $crud->add($produit);
    if ($res) {
        header("location:all.php");
        exit;
    } else {
        echo "Problème d'ajout";
    }
}
$contenu = ob_get_clean();
$titre = "Ajout d'un produit";
include "layout.php";
?>