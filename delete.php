<?php
require_once ('base.php');

$db = new PDO('mysql:host=localhost;dbname=Users', 'root', '');
$sql = ('delete from users where id= $product[];');
    $db->exec($sql);