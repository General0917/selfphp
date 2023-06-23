<?php 
session_start();
$_SESSION['email'] = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>クッキー情報2</title>
</head>
<body>
    <form method="post" action="session1.php">
        セッションを保存しました。
        <input type="submit" value="戻る">
    </form>
</body>
</html>