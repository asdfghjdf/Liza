<?php

/** @var PDO $pdo */
$pdo= require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$addition = $pdo -> query("SELECT * FROM addition")->fetchAll(PDO::FETCH_ASSOC);

$stmt = $pdo->prepare("INSERT INTO `addition`(`name`, `date`, `quantity`) 
VALUES (:name, :date, :quantity)");
$stmt->execute([
    'name' => $_POST['name'],
    'date' => $_POST['date'],
    'quantity' => $_POST['quantity'],
]);

header('Location: /admin/addition/');

?>