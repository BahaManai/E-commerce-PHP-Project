<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    require_once "../connexion.php";
    $sql = "INSERT INTO `produit`  VALUES
(5, 'ASUS TUF GAMING A15', 2300, 20, 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis recusandae accusantium necessitatibus asperiores non error veritatis ex iste facilis excepturi.', 'https://picsum.photos/200/200', 0);";
    $connexion = new connexion();
    $pdo = $connexion->getConnexion();
    $res = $pdo->exec($sql); // retourne le nombre de lignes modifiés
    var_dump($res);
    ?>
</body>

</html>