<?php
/** @var PDO */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("INSERT INTO `goods`(`name`, `price`, `article`) 
VALUES (:name, :price, :article)");
$stmt->execute([
    'name' => $_POST['name'],
    'price' => $_POST['price'],
    'article' => $_POST['article'],
]);

header('Location: /admin/goods/');

?>