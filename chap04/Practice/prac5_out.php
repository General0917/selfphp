<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>prac5_out.php</title>
</head>
<body>
    <?php
    $language = $_POST['language'];
    if ($language === 'PHP' || $language === 'JSP' || $language === 'ASP') {
        print 'サーバーサイド';
    } elseif ($language === 'Java Script' || $language === 'VBScript') {
        print 'クライアントサイド技術';
    }
    ?>
    <br />
    <form method="post" action="prac5_post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>