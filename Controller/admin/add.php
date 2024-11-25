<?php
require_once "../../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
//1ere request: affichage d'un formulaire
include "../../view/admin/add.php";
// 2eme request: Récupération de donnés
if (isset($_POST['ok'])) {
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
        header("location:findAll.php");
        exit;
    } else {
        echo "Problème d'ajout";
    }
}
