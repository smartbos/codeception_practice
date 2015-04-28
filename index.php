<?php
include_once "vendor/autoload.php";

if (isset($_SESSION['isLogin']) && $_SESSION['isLogin']) {
    header('Location: /home.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>첫 페이지</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
    </head>
    <body>
    <div class="container">
        <div class="page-header">
            <h1>첫 페이지</h1>
        </div>

        <div>
            <h2>Step 1 요구사항</h2>
            <ul>
                <li>첫페이지(index.php)에 로그인 링크와 회원 가입 링크가 있어야 합니다.</li>
                <li>로그인 링크를 클릭하면 로그인 페이지(login.php)로 이동해야 합니다.</li>
                <li>회원 가입 링크를 누르면 회원 가입 페이지(signin.php)로 이동해야 합니다.</li>
            </ul>
            <a href="login.php">로그인</a>
            <a href="signin.php">회원가입</a>
        </div>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>