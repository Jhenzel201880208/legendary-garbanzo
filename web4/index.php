<?php
// set cookies
setcookie ("auth", "OK", time () + 5 * 25 * 50 * 55);
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set Cookie Data</title>
</head>
<body>
    <?php //<code>//
    echo "auth is  ".$_COOKIE["auth"];
    ?>
    <form action="loggedin.php" method="cookie">
    Name: <input type="text" name="username">
    Password: <input type="text" name="password"><br/><br/>
    <input type="submit" value="Log Me In">
    </form>
</body>
</html>