<?php
/** @var PDO */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("DELETE FROM addition WHERE article = ?");
$stmt->execute([$_GET['article']?? '']);

header('Location: /admin/addition/');

?>
