<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>메인 페이지</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>메인 페이지</h1>
    </div>
    <h2>Welcome</h2>
    <p><?php echo $user->email;?> 로 로그인 했습니다.</p>
    <a href="logout.php" class="btn btn-danger">로그아웃</a>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>