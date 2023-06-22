<?php require_once './Encode.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>リンク情報</title>
</head>
<body>
    <a href="link1.php"><?php print e($_GET['keyword']) ?></a>
</body>
</html>