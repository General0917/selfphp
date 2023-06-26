<?php
require_once './DbManager.php';

// データベースへの接続を確立
$db = getDb();

// isbn列の値をキーに書籍情報を取得
$stt = $db->query("SELECT title AS name, publish AS name FROM book WHERE isbn = '978-4-7981-4102-2'");
print_r($stt->fetch(PDO::FETCH_ASSOC));