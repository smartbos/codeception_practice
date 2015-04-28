<?php
include_once "vendor/autoload.php";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$errMsg = '';

if ($email && $password) {
    $user = User::where('email', $email)->first();
    if (!$user) {
        $errMsg = '없는 아이디입니다.';
    } else {
        if (!password_verify($password, $user->password)) {
            $errMsg = '아이디와 패스워드가 일치하지 않습니다.';
        } else {
            $_SESSION['isLogin'] = true;
            $_SESSION['userId'] = $user->id;
            header('Location: /main.php');
        }
    }
}

include(__DIR__ . '/views/login.php');
?>

