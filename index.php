<?php
include_once "vendor/autoload.php";

if (isset($_SESSION['isLogin']) && $_SESSION['isLogin']) {
    header('Location: /main.php');
}

include(__DIR__ . '/views/index.php');
?>
