<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>アクセスログ</title>
</head>
<body>
    <table border="1">
        <tr>
            <th>アクセス日時</th>
            <th>スクリプト名</th>
            <th>ユーザーエージェント</th>
        </tr>
        <?php
        $file = file('access.log');

        // 配列に格納された行を順に処理
        foreach ($file as $fline) {
            // タブ文字を行単位のテキストを分割
            $line = explode("\t", $fline);
            print '<tr>';

            // 分割した結果を出力
            foreach ($line as $value) {
                print '<td>' . $value . '</td>';
            }
            print '</tr>';
        }
        ?>
    </table>
</body>
</html>