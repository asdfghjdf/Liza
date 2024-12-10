<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare ("UPDATE `addition` SET
         WHERE article = :article,
`name` = :name,
   date = :date,
     quantity = :quantity")
;
$stmt->execute([
    'name' => $_POST['name'],
    'date' => $_POST['date'],
    'quantity' => $_POST['quantity'],
]);

header('Location: /admin/addition/');