<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Radio Buttons</title>
</head>
<body>
    <p>Choose your favorite web language:</p>
    <form action="radio_post.php" method="post">
        First name: <input type="text" name="firstname"><br>
        Last name: <input type="text" name="lastname"><br>
        <input type="radio" name="fav_language" value="HTML"> 
        <label for="html">HTML</label><br>
        <input type="radio" name="fav_language" value="CSS"> 
        <label for="css">CSS</label><br>
        <input type="radio" name="fav_language" value="JavaScript"> 
        <label for="javascript">JavaScript</label><br>
        <input type="submit">
    </form>
</body>
</html>