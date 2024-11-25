<?php
require_once "produit.php";
require_once "connexion.php";
class CRUD_Produit
{
    private $pdo;
    function __construct()
    {
        $connexion = new connexion();
        $this->pdo = $connexion->getConnexion();
    }
    function findAll()
    {
        $sql = "SELECT * from produit";
        $res = $this->pdo->query($sql);
        return $res->fetchAll(PDO::FETCH_NUM);
    }
    function find($id)
    {
        $sql = "SELECT * from produit WHERE id=$id";
        $res = $this->pdo->query($sql);
        return $res->fetch(PDO::FETCH_NUM); // la résultat est retourné au controller
    }
    function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function add(produit $produit)
    {
        $lib = $produit->getLibelle();
        $pu = $produit->getPrix();
        $qte = $produit->getQtte();
        $des = $produit->getDescription();
        $img = $produit->getImage();
        $pro = $produit->getPromo();
        $sql = "INSERT INTO `produit`  VALUES (NULL, '$lib', $pu, $qte, '$des', '$img', $pro);";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function update($id, $lib, $pu, $qte, $des, $img, $pro)
    {
        $sql = "UPDATE `produit` SET  libelle = '$lib', prix = $pu, qtte = $qte,
        descr = '$des', image = '$img', promo = $pro
        where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
}
