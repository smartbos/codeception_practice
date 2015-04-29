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
    <a href="/logout.php" id="logoutBtn" class="btn btn-danger">로그아웃</a>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.2.min.js"></script>
<script>
    $('#logoutBtn').click(function(){
        if(confirm('정말 로그아웃 하시겠습니까?')){
            location.href = '/logout.php';
        }

        return false;
    })
</script>
</body>
</html>