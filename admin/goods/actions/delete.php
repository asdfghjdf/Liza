<?php
/** @var PDO */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("DELETE FROM goods WHERE id = ?");
$stmt->execute([$_GET['id']?? '']);

header('Location: /admin/goods/');
?>
