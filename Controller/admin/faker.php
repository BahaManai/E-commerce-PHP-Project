<?php
require_once "../../Model/connexion.php";

$connexion = new connexion();
$pdo = $connexion->getConnexion();
$sql = "delete from produit;";
$pdo->exec($sql);
$sql = "";
for ($i = 1; $i < 100; $i++) {
    $lib = "Produit n°1" . $i;
    $pu = random_int(2, 5000);
    $qte = random_int(1, 1000);
    $des = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis recusandae accusantium necessitatibus asperiores non error veritatis ex iste facilis excepturi.';
    $img = 'https://picsum.photos/400/?random=' . $i;
    $pro = random_int(0, 1);
    $sql .= "INSERT INTO `produit`  VALUES (NULL, '$lib', $pu, $qte, '$des', '$img', $pro);";
}
$pdo->exec($sql);
