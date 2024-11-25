<?php ob_start(); ?>
<div class="row">
    <?php
    foreach ($LesProduits as $produit) {
    ?>
        <div class="col-3">
            <div class="card">
                <img src="<?= $produit[5] ?>" class="img-fluid" alt="Photo du produit">
                <div class="card-body">
                    <h2 class="card-title"><?= $produit[1] ?></h2>
                    <p class="card-text"><?= $produit[2] ?></p>
                    <a href="#" class="btn btn-success btn-sm">Détail</a>
                    <a href="#" class="btn btn-primary btn-sm"><i class="fas fa-shopping-cart"></i>Ajouter</a>
                </div>
            </div>
        </div>
    <?php
    }
    ?>
</div>
</body>

</html>
<?php
$contenu = ob_get_clean();
$titre = "Liste des produits";
include "layout.php";
?>