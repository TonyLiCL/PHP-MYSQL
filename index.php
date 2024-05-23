<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');


$sql = "SELECT * FROM `students` WHERE `id` < 30";


$rows = $pdo->query($sql)->fetch();

echo "<pre>";
print_r($rows);
echo "</pre>";
?>