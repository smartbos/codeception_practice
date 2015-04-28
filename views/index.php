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
        <h2>Step 2 요구사항</h2>
        <ul>
            <li>이메일에 test1@gameshuttle.kr 비밀번호에 byoponiti를 입력하면 로그인에 성공해야 합니다.</li>
            <li>로그인에 성공하면 메인 페이지(main.php)로 이동해야 합니다.</li>
            <li>
                로그인에 실패하면 다시 로그인 페이지로 이동하고 상황에 따라 아래 메시지를 출력해야 합니다.
                <ul>
                    <li>아이디가 없는 경우 : '없는 아이디입니다.'</li>
                    <li>패스워드가 틀린 경우 : '아이디와 패스워드가 일치하지 않습니다.'</li>
                </ul>
            </li>
        </ul>
        <a href="login.php">로그인</a>
        <a href="signin.php">회원가입</a>
    </div>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>