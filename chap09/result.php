<?php
require_once './DbManager.php';
require_once '../chap08/Encode.php';
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>結果セット</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>ISBNコード</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
        </tr>
        <?php
            try {
                // データベースへの接続を確立
                $db = getDb();

                // SELECT命令の実行
                $stt = $db->prepare('SELECT * FROM book ORDER BY published DESC');
                $stt->execute();

                // 結果セットの内容を順に出力（while文での記載）
                // while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                
                // 結果セットの内容を順に出力（for文での記載）
                $stt->setFetchMode(PDO::FETCH_ASSOC);
                foreach ($stt as $row) {
        ?>
        <tr>
            <td><?=e($row['isbn']) ?></td>
            <td><?=e($row['title']) ?></td>
            <td><?=e($row['price']) ?></td>
            <td><?=e($row['publish']) ?></td>
            <td><?=e($row['published']) ?></td>
        </tr>
        <?php
                }
            } catch (PDOException $e) {
                print "エラーメッセージ:{$e->getMessage()}";
            }
            ?>
    </table>
</body>
</html>