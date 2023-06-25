<?php
function getDb() {
    $dsn = 'mysql:dbname=selfphp; host=Localhost; charset=utf8';
    $user = 'General';
    $password = 12345;

    // データベースへの接続を確立
    $db = new PDO($dsn, $user, $password);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $db;
}