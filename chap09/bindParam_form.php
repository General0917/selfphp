<?php
require_once './DbManager.php';
require_once '../chap08/Encode.php';

try {
    // データベースへの接続を確立
    $db = getDb();

    // すべての書籍情報を刊行日について降順に取得
    $stt = $db->query('SELECT * FROM book ORDER BY published DESC');

    // フォームの要素に付与するための連番を表す変数$cntを定義
    $cnt = 0;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <form method="post" action="bindParam_process.php">
        <input type="submit" value="更新" />
        <table border="1">
            <tr>
                <th>ISBNコード</th><th>書名</th><th>価格</th><th>出版社</th><th>刊行日</th>
            </tr>
            <?php
            // 取得した書籍情報を基に一覧表フォームを作成
            while ($row = $stt->fetch(PDO::FETCH_ASSOC)) {
                $cnt++;
            ?>
            <tr>
                <td>
                    <?=e($row['isbn']) ?>
                    <input type="hidden" name="isbn<?=e($cnt) ?>" value="<?=e($row['isbn'])?>" />
                </td>
                <td>
                    <input type="text" name="title<?=e($cnt)?>" value="<?=e($row['title'])?>" size="35" />
                </td>
                <td>
                    <input type="text" name="price<?=e($cnt)?>" value="<?=e($row['price'])?>" size="5" />
                </td>
                <td>
                    <input type="text" name="publish<?=e($cnt)?>" value="<?=e($row['publish'])?>" size="12" />
                </td>
                <td>
                    <input type="text" name="published<?=e($cnt)?>" value="<?=e($row['published'])?>" size="12" />
                </td>
            </tr>
            <?php
                }
            } catch (PDOException $e) {
                print "エラーメッセージ:{$e->getMessage()}";
            }
            ?>
        </table>
        <input type="hidden" name="cnt" value="<?=e($cnt) ?>" />
    </form>
</body>
</html>