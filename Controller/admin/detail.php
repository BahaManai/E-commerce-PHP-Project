<?php
require_once "../../Model/CRUD_Produit.php";
$crud = new CRUD_Produit();
$id = $_GET['id'];
$produit = $crud->find($id);
include "../../view/admin/detail.php";
