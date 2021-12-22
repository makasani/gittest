<?php 
 require_once 'config/connect.php';
 $items = mysqli_query($connect, "SELECT * FROM `items`" );
 $items =mysqli_fetch_all($items);
 
 ?>

 <!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="css/style.css">
     <title>Testbd</title>
 </head>
 <body>
 
 <table>
     <tr>
         <th>id</th>
         <th>Название</th>
         <th>Описание</th>
         <th>Цена</th>
         <th>&#9998;</th>
     </tr>
     <?php
        foreach($items as $item) {
            ?>
        <tr> 
         <td><?= $item[0] ?></td>
         <td><?= $item[1] ?></td>
         <td><?= $item[2] ?></td>
         <td><?= $item[3] ?></td>
         <td><a href="update.php?id=<?= $item[0] ?>">Изменить</a></td>
     </tr>
     <?php
        }
?>
 </table>
<h2>Добавить новый товар</h2>
<form action="vendor/create.php" method="post">
        <p>Название</p>
        <input type="text" name="title" >
        <p>Описание</p>
        <textarea name="description"></textarea>
        <p>Цена</p>
        <input type="number" name="price">
        <button type="submit">Добавить</button>
</form>
 </body>
 </html>