<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>画像のアップロード</title>
</head>
<body>
    <form method="post" enctype="multipart/form-data" action="bindValue_process.php">
        <label for="image">画像ファイルをアップロードしてください:</label>
        <input id="image" type="file" name="image" size="50" />
        <input type="submit" value="アップロード" />
    </form>
</body>
</html>