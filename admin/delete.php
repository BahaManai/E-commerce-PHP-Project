<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    require_once "../Classes/CRUD_Produit.php";
    $crud = new CRUD_Produit();
    $res = $crud->delete($id);
    if ($res) {
        header("location:all.php");
        exit;
    } else {
        echo "Problème de suppression";
    }
}
