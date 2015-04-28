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
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="page-header">
            <h1>로그인 페이지</h1>
        </div>

        <form action="#" method="post">
            <div class="form-group">
                <label>email</label>
                <input type="text" name="email" class="form-control">
            </div>
            <div class="form-group">
                <label>password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" class="btn btn-default" value="로그인">
            </div>
        </form>

        <a href="/">홈</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>
