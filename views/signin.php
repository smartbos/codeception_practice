<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>회원가입 페이지</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <div class="page-header">
        <h1>회원가입 페이지</h1>
    </div>
    <?php if($errMsg) { ?>
        <p class="bg-danger" style="padding:10px;"><?php echo $errMsg;?></p>
    <?php } ?>

    <form action="#" method="post">
        <div class="form-group">
            <label>email</label>
            <input type="text" name="email" class="form-control" required="">
        </div>
        <div class="form-group">
            <label>password</label>
            <input type="password" name="password" class="form-control" required="">
        </div>
        <div class="form-group">
            <input type="submit" class="btn btn-default" value="회원가입">
        </div>
    </form>

    <a href="/">홈</a>
</div>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
</body>
</html>