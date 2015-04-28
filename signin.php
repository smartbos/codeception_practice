<?php
include_once "vendor/autoload.php";

$email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
$password = filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING);
$errMsg = '';

if ($email && $password) {
    $user = User::where('email', $email)->count();

    if ($user == 0) {
        $user = User::create([
            'email'    => $email,
            'password' => password_hash($password, PASSWORD_BCRYPT)
        ]);

        if ($user) {
            $_SESSION['isLogin'] = true;
            $_SESSION['userId'] = $user->id;
            header('Location: /main.php');
        }
    } else {
        $errMsg = '이미 사용중인 이메일입니다.';
    }
}

include(__DIR__ . '/views/signin.php');
?>