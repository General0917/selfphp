<?php
require_once './DbManager.php';

$pdo = getDb();

if ($_SERVER['REQUEST_METHOD'] != 'post') {
    // 画像を取得

} else {
    // 画像を保存
    if (!empty($_FILES['image']['name'])) {
        $type = $_FILES['image']['type'];
        $content = file_get_contents($_FILES['image']['tmp_name']);

        $sql = 'INSERT INTO photo(id, type, data) VALUES (1, :type, :data)';
        $stmt = $pdo->prepare($sql);
        $stmt->bindValue(':type', $type, PDO::PARAM_STR);
        $stmt->bindValue(':data', $content, PDO::PARAM_STR);
        $stmt->execute();
    }
    header('Location:files_upload2.php');
    exit();
}
?>
<!DOCTYPE html>
<html lang="ja">