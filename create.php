<?php
require_once ('base.php');
$db = new PDO('mysql:host=localhost;dbname=Users', 'root', '');
$name = $_POST['Name'];
$age = $_POST['Age'];
$salary = $_POST['Salary'];
if(!empty($name)&& !empty($age)&& !empty($salary) ){

    $params = ['name'=>$name,'age'=>$age,'salary'=>$salary];
    $sqlAdd= ('insert into Users (Name,Age,Salary) values (:name,:age,:salary)');
    $stmt = $db ->prepare($sqlAdd);
    $stmt->execute($params);

    header('Location: ' . $_SERVER['HTTP_REFERER']);
}
