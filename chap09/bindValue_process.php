<?php
require_once './DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // INSERT命令の準備
    $stt = $db->prepare('INSERT INTO photo(type, data) VALUES (:type, :data)');

    // プレイスホルダにアップロードファイルをセット
    $file = fopen($_FILES['image']['tmp_name'], 'rb');

    // INSERT命令をbind
    $stt->bindValue(':type', $_FILES['image']['type'], PDO::PARAM_STR);
    $stt->bindValue(':data', $file, PDO::PARAM_LOB);

    // INSERT命令の実行
    $stt->execute();

    print '写真のアップロードに成功しました。';
} catch (PDOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}