<?php
require_once "produit.php";
require_once "../connexion.php";
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
    function find($id) {}
    function delete($id)
    {
        $sql = "delete from produit where id=$id";
        $res = $this->pdo->exec($sql);
        return $res;
    }
    function add(produit $produit) {}
}
