<?php require_once 'Encode.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>クエリ情報2</title>
</head>
<body>
    <form method="post" action="get1.php">
        こんにちは、<?php print e($_GET['name']) ?>さん！！
        <input type="submit" value="送信" />
        <!-- <button type="submit">送信</button> -->
    </form>
</body>
</html>