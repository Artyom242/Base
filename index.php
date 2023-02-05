<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Document</title>
</head>

<body>
    <?php

    $sql = "insert into Users('Name','Age',Salary) values (name,age,salary)";
    $print= $db->query("select * from Users");
    $arr = $print->fetchAll(PDO::FETCH_ASSOC);

    //$result = $db->query("select * from users");
/*
    ?>
        <?php foreach ($result as $elem): ?>
    <p></p>
        <b><?=$elem['Name']?></b>
          <b><?=$elem['Age']?>
          </<b><?=$elem['Salary']?></b>
<p></p>
<?php endforeach;?>
*/ ?>
    <table>
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Age</th>
            <th>Salary</th>
            <th>&#9672;</th>
            <th>&#9998;</th>
            <th>&#10006;</th>
        </tr>
        <?php foreach ($arr as $elem): ?>
        <tr>
            <th><?= $elem['id'] ?></th>
            <th><?= $elem['Name'] ?></th>
            <th><?= $elem['Age'] ?></th>
            <th><?= $elem['Salary'] ?></th>
            <td><a href="product.php?id=<?= $product[0] ?>">Просмотр</a></td>
            <td><a href="update.php?id=<?= $product[0] ?>">Обновить</a></td>
            <td><a href="vendor/delete.php?id=<?= $product[0] ?>">Удалить</a></td>
            <?php endforeach;?>
        </tr>

        <h2>Добавить нового работника</h2>
        <form action="/create.php" method="post">
            <p>Имя</p>
            <input type="text" name="Name">
            <p>Возраст</p>
            <input type="text" name="Age">
            <p>Зарплата</p>
            <input type="number" name="Salary">
            <button type="submit">Добавить</button>
        </form>

</body>

</html>