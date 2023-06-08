<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>prac4_post.php</title>
</head>
<body>
    <form method="post" action="prac4_out.php">
        <label for="language">プログラミング言語を選択してください:</label>
        <select name="language">
            <option value="PHP">PHP</option>
            <option value="JSP">JSP</option>
            <option value="ASP">ASP</option>
            <option value="Java Script">Java Script</option>
            <option value="VBScript">VBScript</option>
        </select>
        <button type="submit">送信</button>
    </form>
</body>
</html>