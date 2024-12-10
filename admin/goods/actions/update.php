<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare ("UPDATE `goods` SET
`name` = :name,
  price = :price,
   article = :article,
   WHERE id = :id");
$stmt->execute([
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'article' => $_POST['article'],
    'id' => $_POST['id']
]);

header('Location: /admin/goods/');