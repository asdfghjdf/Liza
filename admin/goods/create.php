<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Добавить товар</title>
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
        color: #2c5037;
    }

    input {
    width: 80%;
    margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
    }

    textarea{
    width: 80%;
    margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
    }

    label{
    width: 80%;
    margin: 20px auto;
        border-collapse: collapse;
        background-color: #fff;
    }
</style>
<body>
<form action="/admin/goods/actions/store.php" method="post" enctype="multipart/form-data">
    <input type="text" name="name" placeholder="Название">
    <input type="number" name="price" placeholder="цена">
    <input type="number" name="article" placeholder="article">
    <input type="submit">
</form>
</body>
</html>