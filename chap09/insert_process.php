<?php
require_once './DbManager.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // INSERT命令の準備
    // $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES (:isbn, :title, :price, :publish, :published)');
    $stt = $db->prepare('INSERT INTO book(isbn, title, price, publish, published) VALUES (?, ?, ?, ?, ?)');

    // INSERT命令にポストデータの内容をセット
    $isbn = $_POST['isbn'] ?? '';
    $title = $_POST['title'] ?? '';
    $price = $_POST['price'] ?? '';
    $publish = $_POST['publish'] ?? '';
    $published = $_POST['published'] ?? '';

    // NULLチェック
    if ($isbn === '' || $title === '' || $price === 0 || $publish === '' || $published === '') {
        throw new PDOException('登録データが空のものがあります。');
    }

    // INSERT命令にポストデータの内容をセット
    // $stt->bindValue(':isbn', $_POST['isbn']);
    // $stt->bindValue(':title', $_POST['title']);
    // $stt->bindValue(':price', $_POST['price']);
    // $stt->bindValue(':publish', $_POST['publish']);
    // $stt->bindValue(':published', $_POST['published']);
    $stt->bindValue(1, $_POST['isbn']);
    $stt->bindValue(2, $_POST['title']);
    $stt->bindValue(3, $_POST['price']);
    $stt->bindValue(4, $_POST['publish']);
    $stt->bindValue(5, $_POST['published']);

    // INSERT命令を実行
    $stt->execute();

    // 登録処理後は入力フォームにリダイレクト
    header('Location: http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/insert_form.php');
} catch (PDOException $e) {
    print "エラーメッセージ:{$e->getMessage()}";
}