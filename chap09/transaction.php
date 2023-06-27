<?php
require_once './DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // 例外処理を有効化
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // トランザクションを開始
    $db->beginTransaction();

    // INSERT命令を実行
    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-4-7981-2151-2', '独習PHP 第2版', 3200, '翔泳社', '2010-04-12')");

    // 次のINSERT命令で主キー制約違反が発生するはず...
    $db->exec("INSERT INTO book(isbn, title, price, publish, published) VALUES('978-4-7981-2151-2', 'ひとりで学ぶPHP', 3500, '翔泳社', '2016-06-10')");

    // すべての処理が成功したら、トランザクションをコミット
    $db->commit();
} catch (PDOException $e) {
    // 例外が発生したら、エラーメッセージを表示&トランザクションをロールバック
    $db->rollBack();
    print "エラーメッセージ:{$e->getMessage()}";
}