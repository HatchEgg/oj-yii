<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Login View</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <form action="index.php?r=login/enter" method="post">
        <p>用户名<input type="text" name="username" value="<?php echo $username;?>"/></p>
        <p>密码<input type="text" name="password"/></p>
        <p><input type="submit" value="LOGIN!!!"/></p>
    </form>
</body>
</html>