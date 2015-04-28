<?php
include_once "vendor/autoload.php";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);

if($email && $username && $password){
    $user = User::where('email', $email)->count();

    if($user == 0) {
        $user = User::create([
            'email' => $email,
            'username' => $username,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        if($user) {
            $_SESSION['isLogin'] = true;
            header('Location: /home.php');
        }
    } else {
        $_SESSION['errorMsg'] = 'duplicated';
    }
}

?>

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
        <?php if(isset($_SESSION['errorMsg']) && $_SESSION['errorMsg']) { ?>
            <p><?php echo $_SESSION['errorMsg'];?></p>
        <?php } ?>

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
                <input type="submit" class="btn btn-default" value="회원가입">
            </div>
        </form>

        <a href="/">홈</a>
    </div>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    </body>
</html>