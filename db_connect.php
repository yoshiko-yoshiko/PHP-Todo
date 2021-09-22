<?php
try {
    $db_con = new PDO("mysql:dbname=Todo-app;host=localhost;charset=utf8","root","root");
    $count = $db_con->exec('INSERT INTO ikemen SET common ="'.$_POST['add'].'"');
}
catch (PDOException $e) {
    echo "登録失敗しました". $e->getMessage();
}
