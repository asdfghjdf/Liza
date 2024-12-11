<?php

/** @var PDO $pdo */
$pdo= require $_SERVER['DOCUMENT_ROOT'].'/db.php';
$addition = $pdo -> query("SELECT * FROM addition")->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            color: #333;
            line-height: 1.6;
        }

        a {
            text-decoration: none;
            color: #34db69;
            padding: 10px 15px;
            border-radius: 5px;
        }

        a:hover {
            background-color: #34db63;
            color: white;
        }

        nav {
            text-align: center;
            margin: 20px 0;
        }

        h1 {
            text-align: center;
            margin: 20px 0;
            color: #2c5036;
        }
    </style>
</head>
<body>
<nav>
    <a href="/goods/index.php">Назад</a>
</nav>

<h1 id="p1">Товары</h1>
<table>
    <thead>
    <tr>
        <th>#</th>
        <th>Название</th>
        <th>Дата</th>
        <th>Количество</th>
    </tr>
    </thead>
    <tbody>
    <?php foreach ($addition as $additions): ?>
        <tr>
            <td><?= $additions['article'] ?></td>
            <td><?= $additions['name'] ?></td>
            <td><?= $additions['date'] ?></td>
            <td><?= $additions['quantity'] ?></td>
            <td><a href="/admin/addition/create.php">Добавить</a></td>
            <td><a href="/admin/addition/edit.php?article=<?= $additions['article']?>">Редактировать</a></td>
            <td><a href="/admin/addition/actions/delete.php?article=<?= $additions['article']?>">Удалить</a></td>
        </tr>
    <?php endforeach ?>
    </tbody>
</table>
</body>
</html>