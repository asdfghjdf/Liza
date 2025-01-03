<?php
/** @var PDO $pdo */
$pdo = require_once $_SERVER['DOCUMENT_ROOT'] . '/db.php';

$stmt = $pdo->prepare("SELECT * FROM addition WHERE article = ?");
$stmt->execute([$_GET['article']??'']);
$addition = $stmt->fetch(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body, h1, table {x
    margin: 0;
        padding: 0;
    }

    body,a {
        font-family: Arial, sans-serif;
        background-color: #f4f4f4;
        color: #333;
        line-height: 1.6;
    }

    h1,a {
        text-align: center;
        margin: 20px 0;
        color: #2c503a;
    }

    table,a {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
    }

    th,a {
        background-color: #34db63;
        color: white;
        padding: 10px;
        text-align: left;
    }

    td,a {
        padding: 10px;
        border: 1px solid #ddd;
    }
    input {
        width: 80%;
        margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
    }

</style>
<body>
<form action="/admin/addition/actions/update.php" method="post" enctype="multipart/form-data">
    <input type="hidden" name="article" value="<?= $addition['article']?>">
    <input type="text" name="name" value="<?= $addition['name']?>">
    <input type="date" name="date"value="<?= $addition['date'] ?>">
    <input type="number" name="quantity"value="<?= $addition['quantity'] ?>">
    <input type="submit" id="submit">
</form>
</body>
</html>