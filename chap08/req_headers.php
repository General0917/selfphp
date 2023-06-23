<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>ヘッダ情報</title>
</head>
<body>
    <table border="1">
        <?php
        // $_SERVERキー/値を順に取得
        foreach($_SERVER as $key => $value) {
            // キー（$key）が「HTTP_」で始まる場合のみ、その値を出力
            if (mb_strpos($key, 'HTTP_') === 0) {
        ?>
            <tr valign="top">
                <td><?=e($key)?></td>
                <td><?=e($value);?></td>
            </tr>
        <?php
        }
    }
        ?>
    </table>
</body>
</html>