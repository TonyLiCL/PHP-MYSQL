<?php
$dsn = "mysql:host=localhost;charset=utf8;dbname=school";
$pdo = new PDO($dsn, 'root', '');

$sql = "insert into students (`school_num`,`name`,`birthday`,`uni_id`
,`addr`,`parents`,`tel`,`dept`,`graduate_at`,`status_code`) value()";

?>