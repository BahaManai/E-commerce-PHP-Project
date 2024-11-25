<?php
ob_start();
?>
<div class="row">
    <div class="col-6">
        <div class="card">
            <img src="<?= $produit[5] ?>" alt="photo">
        </div>
    </div>
    <div class="col-6">
        <h3><?= $produit[1] ?>(<?= $produit[2] ?> DT)</h3>
        <p><?= $produit[4] ?></p>
        <?php
        if ($produit[6] == 1) {
            echo "<span class='btn btn-success'>En Promotion</span>";
        }
        ?>
    </div>
</div>
<?php
$contenu = ob_get_clean();
$titre = "Détails de produit";
include "layout.php";
?>