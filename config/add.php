<?php
require 'config/connect.php';
$db = new PDO('mysql:host=localhost;dbname=Users', 'root', '');
$sql = "insert into Users('Name','Age',Salary) values (name,age,salary)";
$result = $db->prepare($sql);

header('/Location: /');