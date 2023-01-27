<?php
$host = 'localhost'; // имя хоста
$user = 'root';      // имя пользователя
$pass = '';          // пароль
$name = 'Users';      // имя базы данных


$db = new PDO('mysql:host=localhost;dbname=Users', 'root', '');
$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Salary = $_POST['Salary'];

$add = $db->exec('insert into users ( "Name","Age","Salary") values (null,"$Name","$Age","$Salary")');
header('Location: /');