<?php
if ($_POST['x'] > 20) :
    print '変数$xは20より大きいです。';
elseif ($_POST['x'] > 10) :
    print '変数$xは10より大きく、20以下です。';
elseif (empty($_POST['x'])) :
    print '変数$xに数値が入力されておりません。';
else :
    print '変数$xは10以下です。';
endif;
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>elseif_alias_out.php</title>
</head>
<body>
    <form method="post" action="elseif_alias_post.php">
        <button type="submit">戻る</button>
    </form>
</body>
</html>