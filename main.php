<?php
include_once __DIR__ . "/vendor/autoload.php";

$user = User::find($_SESSION['userId']);

include( __DIR__ .'/views/main.php');
?>
