<?php
    require_once 'config/connect.php';

    $item_id = $_GET['id'];
    $item = mysqli_query($connect, "SELECT * FROM `items` WHERE `id` = '$item_id'" );
    $item = mysqli_fetch_assoc($item);
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">

    <title>Редактировать</title>
</head>
<body>
    
<h2>Редактировать товар</h2>
<form action="vendor/update.php" method="post">
    <input type="hidden" name="id" value="<?= $item_id ?>" >
        <p>Название</p>
        <input type="text" name="title" value="<?= $item['title'] ?>" >
        <p>Описание</p>
        <textarea name="description"> <?= $item['description'] ?></textarea>
        <p>Цена</p>
        <input type="number" name="price" value="<?= $item['price'] ?>">
        <button type="submit">Добавить</button>
</form>


</body>
</html>
