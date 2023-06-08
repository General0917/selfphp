<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>prac4_out.php</title>
</head>
<body>
    <?php
    switch($_POST['language']) {
        case 'PHP':
        case 'JSP':
        case 'ASP':
            print 'サーバーサイド技術';
            break;
        case 'Java Script':
        case 'VBScript':
            print 'クライアントサイド技術';
            break;
    }
    ?>
    <br />
    <form method="post" action="prac4_post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>