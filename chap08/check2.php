<?php require_once 'Encode.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>チェックボックス2</title>
</head>
<body>
    <form method="post" action="check1.php">
    選択されたのは、<?php print e(implode(',', $_POST['arch'])) ?>です。
        <input type="submit" value="送信">
        <!-- <button type="submit">送信</button> -->
    </form>
</body>
</html>