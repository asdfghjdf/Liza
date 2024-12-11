<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare ("UPDATE `goods` SET
`name` = :name,
  price = :price,
   article = :article
     WHERE id = :id");
$stmt->execute([
    'id' => $_POST['id'],
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'article' => $_POST['article'],
]);

header('Location: /admin/goods/');

?>