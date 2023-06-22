<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>DirectoryIterator クラス</title>
</head>
<body>
    <table border="1">
    <tr>
        <th>ファイル</th><th>サイズ</th><th>最終アクセス</th><th>最終更新日</th>
    </tr>
    <?php
    // カレントフォルダをオープン
    $dir = new DirectoryIterator('./');

    // フォルダの内容を順番に読み込み
    foreach ($dir as $file) {
        // 読み込んだ要素がファイルである（サブフォルダなどでない）場合のみ表示処理
        if ($file->isFile()) {
    ?>
    <tr>
        <td><?php print mb_convert_encoding($file->getFileName(), 'UTF-8', 'SJIS-WIN'); ?></td>
        <td><?php print $file->getSize(); ?>B</td>
        <td><?php print date('Y/m/d H:i:s', $file->getATime()); ?></td>
        <td><?php print date('Y/m/d H:i:s', $file->getMTime()); ?></td>
    </tr>
<?php
    }
}
?>
    </table>
</body>
</html>