<?php
require_once ('configDB.php');

$Name = $_POST['Name'];
$Age = $_POST['Age'];
$Salary = $_POST['Salary'];

$add = $db->exec('insert into users ( "Name","Age","Salary") values (null,"$Name","$Age","$Salary")');
header('Location: /');