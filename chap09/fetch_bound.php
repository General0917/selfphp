<?php
require_once './DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // クエリ情報idをキーに、photoテーブルから画像データを取得（無指定の場合は1）
    $stt = $db->prepare('SELECT * FROM photo WHERE id = ?');
    $stt->bindValue(1, $_GET['id'] ?: 1);
    $stt->execute();

    // 取得列と変数とをマッピング（type列は変数$type、data列は$dataに割り当て）
    $stt->bindColumn('type', $type, PDO::PARAM_STR);
    $stt->bindColumn('data', $data, PDO::PARAM_LOB);

    // フェッチモードPDO::FETCH_BOUNDでレコードを取得
    if ($stt->fetch(PDO::FETCH_BOUND)) {
        // 取得に成功した場合は、ブラウザに取得データを出力
        header("Content-Type: {$type}");
        print $data;
    } else {
        // 該当するレコードが存在しない場合はエラーメッセージを表示
        print '該当するデータがありません。';
    }
} catch (PDOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}