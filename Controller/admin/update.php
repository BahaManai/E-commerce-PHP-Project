<?php
require_once "../../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
// Définir les variables qui vont être utilisés dans le view.
$id = $_GET['id'];
$produit = $crud->find($id);
//1ere request: affichage d'un formulaire
include "../../view/admin/update.php";
// 2eme request: Récupération de donnés + Traitement (Update)
if (isset($_POST['ok'])) {
    $libelle = htmlspecialchars($_POST['libelle']);
    $prix = htmlspecialchars($_POST['prix']);
    $qtte = htmlspecialchars($_POST['qtte']);
    $description = htmlspecialchars($_POST['description']);
    $image = htmlspecialchars($_POST['image']);
    $promo = htmlspecialchars($_POST['promo']);
    $res = $crud->update($id, $libelle, $prix, $qtte, $description, $image, $promo);
    if ($res) {
        header("location:findAll.php");
        exit;
    } else {
        echo "Problème de modification";
    }
}
