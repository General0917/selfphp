<?php
try {
    $selfdns = 'mysql:dbname=selfphp; host=Localhost; charset=utf8';
    $selfusr = 'General';
    $selfpass = 12345;

    $db = new PDO($selfdns, $selfusr, $selfpass);
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    print 'データベースへの接続を確立しました。';
} catch (PDOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}