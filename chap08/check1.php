<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>チェックボックス1</title>
</head>
<body>
    <form method="post" action="check2.php">
        <!-- <input id="php" type="checkbox" name="arch" value="PHP"> -->
        <input id="php" type="checkbox" name="arch[]" value="PHP">
        <label for="php">PHP</label>
        <!-- <input id="jsp" type="checkbox" name="arch" value="JSP&サーブレット"> -->
        <input id="jsp" type="checkbox" name="arch[]" value="JSP&サーブレット">
        <label for="jsp">JSP&サーブレット</label>
        <!-- <input id="asp" type="checkbox" name="arch" value="ASP.NET"> -->
        <input id="asp" type="checkbox" name="arch[]" value="ASP.NET">
        <label for="asp">ASP.NET</label>
        <input type="submit" value="送信">
        <!-- <button type="submit">送信</button> -->
    </form>
</body>
</html>