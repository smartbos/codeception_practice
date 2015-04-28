<?php
include_once "vendor/autoload.php";

$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if ($username == 'lhs' && $password = '123') {
    $_SESSION['isLogin'] = true;
    header('Location: /home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>로그인 페이지</title>
    </head>
    <body>
        <form action="#" method="post">
            <input type="text" name="username">
            <input type="password" name="password">
            <input type="submit" name="login">
        </form>
        <a href="/signin.php">sign in</a>
    </body>
</html>
